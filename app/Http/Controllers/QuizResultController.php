<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\User;
use App\Models\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizResultController extends Controller
{
    public function show($id)
    {
        $title = "Quiz Result -" . env('APP_NAME');
        $answers = Answer::where('quiz_id', $id)->where('user_id', Auth::user()->user_id)->get();
        $answerModel = new Answer();
        $questionModel = new Question();
        $quiz = Quiz::find($id);
        $questions = $quiz->getQuestions();
        $score = Score::where('user_id', Auth::user()->user_id)->first();
        $userScore = User::find(Auth::user()->user_id)->score;

        // dd($answers->answerIscorrect(4));

        $qountCurrectAnswers = count(Answer::join('questions', 'user_answers.question_id', '=', 'questions.question_id')
            ->where('quiz_id', $id)->where('user_id', Auth::user()->user_id)
            ->whereColumn('questions.correct_option', '=', 'user_answers.chosen_option')->get());

        // dd(session('quiz'),$answers);

        return view('quiz_result', compact('title', 'quiz', 'answers', 'answerModel', 'questionModel', 'questions', 'qountCurrectAnswers', 'score', 'userScore'));
    }
}