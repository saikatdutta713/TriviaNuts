<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        $categories = category::all();
        return view('admin.manage_question', compact('questions', 'categories'));
    }

    public function viewAddForm()
    {
        $questions = Question::all();
        $categories = category::all();
        $add = true;
        return view('admin.manage_question', compact('questions', 'categories', 'add'));
    }

    public function viewEditForm($id)
    {
        $questions = Question::all();
        $categories = category::all();
        $edit = true;
        $editQuestion = Question::find(intval($id));
        if ($editQuestion) {
            return view('admin.manage_question', compact('questions', 'categories', 'edit', 'editQuestion'));
        } else {
            return redirect()->route('admin.question')->with('error_notification', 'Question does not exists');
        }
    }

    public function getAllQuestions($tableLength = 5, $searchCriteria = "")
    {
        $tableLength = (int)$tableLength;

        // Create a base query for the questions
        $query = Question::query();

        // If search criteria is provided, filter the questions
        if (!empty($searchCriteria)) {
            $query->where(function ($query) use ($searchCriteria) {
                $query->orWhere('question_id', 'like', '%' . $searchCriteria . '%')
                    ->orWhere('question_text', 'like', '%' . $searchCriteria . '%')
                    ->orWhere('question_picture', 'like', '%' . $searchCriteria . '%')
                    ->orWhere('answer_option_a', 'like', '%' . $searchCriteria . '%')
                    ->orWhere('answer_option_b', 'like', '%' . $searchCriteria . '%')
                    ->orWhere('answer_option_c', 'like', '%' . $searchCriteria . '%')
                    ->orWhere('answer_option_d', 'like', '%' . $searchCriteria . '%')
                    ->orWhere('correct_option', 'like', '%' . $searchCriteria . '%')
                    ->orWhere('categories.category_title', 'like', '%' . $searchCriteria . '%'); // Search in category name
            });
        }

        // Join with the 'categories' table and select the category name
        $query->join('categories', 'questions.category_id', '=', 'categories.category_id')
            ->select('questions.*', 'categories.category_title');

        // Paginate the results
        $questions = $query->paginate($tableLength);

        return response()->json($questions);
    }

    public function editQuestion(Request $request, $id)
    {
        $question = Question::find(intval($id));

        $question->question_text = $request->question;
        $question->correct_option = $request->answer;
        $question->answer_option_a = $request->answer_option_a;
        $question->answer_option_b = $request->answer_option_b;
        $question->answer_option_c = $request->answer_option_c;
        $question->answer_option_d = $request->answer_option_d;

        $question->save();

        return redirect()->route('admin.question')->with('success_notification', 'Question updated Successfully');
    }

    public function addQuestion(Request $request)
    {
        // Validate the request data
        $request->validate([
            'question' => 'required|string|max:255|unique:questions,question_text',
            'answer' => 'required|string|max:255',
            'answer_option_a' => 'required|string|max:255',
            'answer_option_b' => 'required|string|max:255',
            'answer_option_c' => 'required|string|max:255',
            'answer_option_d' => 'required|string|max:255',
            'category' => 'required|integer',
        ]);

        // Create a new question
        $question = new Question();
        $question->question_text = $request->input('question');
        $question->correct_option = $request->input('answer');
        $question->answer_option_a = $request->input('answer_option_a');
        $question->answer_option_b = $request->input('answer_option_b');
        $question->answer_option_c = $request->input('answer_option_c');
        $question->answer_option_d = $request->input('answer_option_d');
        $question->category_id = $request->input('category');

        // Save the question
        $question->save();

        if ($question) {
            return redirect()->route('admin.question')->with('success_notification', 'Question added successfully');
        } else {
            return back()->withInput()->withErrors(['An error occurred while adding the question']);
        }
    }

    public function deleteAttemptQuestion($id)
    {
        $question = Question::find($id);

        if ($question) {
            return redirect()->route('admin.question')
                ->with('warning', 'Are you sure?')
                ->with('buttonText', 'Yes')
                ->with('closeButtonText', 'No')
                ->with('redirect_link', route('admin.question.delete', ['id' => $id]));
        } else {
            return redirect()->route('admin.question')->with('error_notification', 'Question not found or already deleted');
        }
    }

    public function deleteQuestion($id)
    {
        $question = Question::find($id);

        if ($question) {
            $question->delete();
            return redirect()->route('admin.question')->with('success_notification', 'Question deleted Successfully');
        } else {
            return redirect()->route('admin.question')->with('error_notification', 'Question not found or already deleted');
        }
    }
}
