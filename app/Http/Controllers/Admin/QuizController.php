<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::all();
        $categories = category::all();
        return view('admin.manage_quiz', compact('quizzes', 'categories'));
    }

    public function viewAddForm()
    {
        $quizzes = Quiz::all();
        $categories = category::all();
        $add = true;
        return view('admin.manage_quiz', compact('quizzes', 'categories', 'add'));
    }

    public function viewEditForm($id)
    {
        $quizzes = Quiz::all();
        $categories = category::all();
        $edit = true;
        $editQuiz = Quiz::find(intval($id));
        if ($editQuiz) {
            return view('admin.manage_quiz', compact('quizzes', 'categories', 'edit', 'editQuiz'));
        } else {
            return redirect()->route('admin.quiz')->with('error_notification', 'Quiz does not exists');
        }
    }

    public function getAllQuizzes($tableLength = 5, $searchCriteria = "")
    {
        $tableLength = (int)$tableLength;

        // Create a base query for the questions
        $query = Quiz::query();

        // If search criteria is provided, filter the questions
        if (!empty($searchCriteria)) {
            $query->where(function ($query) use ($searchCriteria) {
                $query->orWhere('quiz_id', 'like', '%' . $searchCriteria . '%')
                    ->orWhere('title', 'like', '%' . $searchCriteria . '%')
                    ->orWhere('duration', 'like', '%' . $searchCriteria . '%')
                    ->orWhere('time', 'like', '%' . $searchCriteria . '%')
                    ->orWhere('questions', 'like', '%' . $searchCriteria . '%')
                    ->orWhere('status', 'like', '%' . $searchCriteria . '%')
                    ->orWhere('categories.category_title', 'like', '%' . $searchCriteria . '%'); // Search in category name
            });
        }

        // Join with the 'categories' table and select the category name
        $query->join('categories', 'quizzes.category_id', '=', 'categories.category_id')
            ->select('quizzes.*', 'categories.category_title');

        // Paginate the results
        $questions = $query->paginate($tableLength);

        return response()->json($questions);
    }

    public function addQuiz(Request $request)
    {
        Validator::make($request->all(), [
            'category' => ['required'],
            'title' => ['required'],
            'status' => ['required'],
            'questions' => ['required'],
            'publishing_date' => ['required']
        ])->validate();

        $newQuiz = new Quiz([
            'title' => $request->get('title'),
            'time' => $request->get('publishing_date'),
            'questions' => $request->get('questions'),
            'status' => $request->get('status'),
            'category_id' => $request->get('category')
        ]);
        $success = $newQuiz->save();
        if ($success) {
            return redirect()->route('admin.quiz')->with('success_notification', 'Question added successfully');
        } else {
            return back()->withInput()->withErrors(['An error occurred while adding the question']);
        }
    }

    public function editQuiz(Request $request, $id)
    {
        Validator::make($request->all(), [
            'status' => ['required'],
            'questions' => ['required'],
            'publishing_date' => ['required']
        ])->validate();

        $quiz = Quiz::find($id);
        // dd($request->all());
        $quiz->time = $request->input("publishing_date");
        $quiz->questions = $request->input("questions");
        $quiz->status = $request->input("status");

        $success = $quiz->save();

        if ($success) {
            return redirect()->route('admin.quiz')->with('success_notification', 'Quiz updated Successfully');
        } else {
            return redirect()->route('admin.quiz')->with('error_notification', 'Quiz not updated! try again');
        }
    }

    public function deleteAttemptQuiz($id)
    {
        $quiz = Quiz::find($id);

        if ($quiz) {
            return redirect()->route('admin.quiz')
                ->with('warning', 'Are you sure?')
                ->with('buttonText', 'Yes')
                ->with('closeButtonText', 'No')
                ->with('redirect_link', route('admin.quiz.delete', ['id' => $id]));
        } else {
            return redirect()->route('admin.quiz')->with('error_notification', 'Quiz not found or already deleted');
        }
    }

    public function deleteQuiz($id)
    {
        $quiz = Quiz::find($id);

        if ($quiz) {
            $quiz->delete();
            return redirect()->route('admin.quiz')->with('success_notification', 'Quiz deleted Successfully');
        } else {
            return redirect()->route('admin.quiz')->with('error_notification', 'Quiz not found or already deleted');
        }
    }
}
