<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;
use Carbon\Carbon;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::all();
        return response()->json($quizzes);
    }

    public function show($id)
    {
        $quiz = Quiz::find($id);

        if (!$quiz) {
            return response()->json(['message' => 'Quiz not found'], 404);
        }

        return response()->json($quiz);
    }

    public function store(Request $request)
    {
        $quiz = Quiz::create($request->all());
        return response()->json($quiz, 201);
    }

    public function getQuizzesByCategoryAndToday($categoryId)
    {
        $today = Carbon::today()->toDateString();

        $quizzes = Quiz::where('category_id', $categoryId)
            ->whereDate('time', $today)
            ->get();

        if ($quizzes->isEmpty()) {
            return response()->json(['message' => 'No quizzes found for today in this category'], 404);
        }

        // $todayQuizQuestions = $quizzes->map(function ($quiz) {
        //     $questionIds = explode(',', $quiz->questions);
        //     $questions = Question::whereIn('question_id', $questionIds)->get();
        //     $quiz->questions = $questions;
        //     return $questions;
        // });

        $questionIds = explode(',', $quizzes[0]->questions);
        $questions = Question::whereIn('question_id', $questionIds)->get();

        return response()->json($questions);
    }

    public function update(Request $request, $id)
    {
        $quiz = Quiz::find($id);

        if (!$quiz) {
            return response()->json(['message' => 'Quiz not found'], 404);
        }

        $quiz->update($request->all());
        return response()->json($quiz);
    }

    public function destroy($id)
    {
        $quiz = Quiz::find($id);

        if (!$quiz) {
            return response()->json(['message' => 'Quiz not found'], 404);
        }

        $quiz->delete();
        return response()->json(['message' => 'Quiz deleted']);
    }

    public function play(Request $request, $id)
    {
        $quiz = Quiz::with('questions')->find($id);

        if (!$quiz) {
            return response()->json(['message' => 'Quiz not found'], 404);
        }

        $answers = $request->input('answers');
        $score = 0;
        $totalQuestions = $quiz->questions->count();

        foreach ($quiz->questions as $question) {
            if (isset($answers[$question->question_id]) && $answers[$question->question_id] == $question->correct_option) {
                $score++;
            }
        }

        return response()->json([
            'score' => $score,
            'total' => $totalQuestions
        ]);
    }
}
