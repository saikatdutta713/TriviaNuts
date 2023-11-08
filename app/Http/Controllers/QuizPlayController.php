<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\category;
use App\Models\Participant;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Score;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class QuizPlayController extends Controller
{
    public function index()
    {
        $title = "Quiz - " . env('APP_NAME');

        $user = Auth::user();
        $categories = Category::all();

        $userParticipation = Participant::where('user_id', Auth::user()->user_id)->get();

        if (Session::has('selectedCategory')) {

            $selectedCategory = Session::get('selectedCategory')['title'];

            $todayQuizzes = Quiz::join('categories', 'quizzes.category_id', '=', 'categories.category_id')
                ->where('quizzes.category_id', session()->get('selectedCategory')['id'])
                ->where('quizzes.status', 'approved')
                ->whereDate('quizzes.time', Carbon::today())
                ->get();

            $completedQuizzes = Quiz::join('categories', 'quizzes.category_id', '=', 'categories.category_id')
                ->where('quizzes.category_id', session()->get('selectedCategory')['id'])
                ->where('quizzes.status', 'approved')
                ->whereIn('quiz_id', $userParticipation->pluck('quiz_id'))
                ->paginate(8);

            $activeQuizzes = Quiz::join('categories', 'quizzes.category_id', '=', 'categories.category_id')
                ->where('quizzes.category_id', session()->get('selectedCategory')['id'])
                ->where('quizzes.status', 'approved')
                ->whereNotIn('quizzes.quiz_id', $todayQuizzes->pluck('quiz_id'))
                ->whereNotIn('quizzes.quiz_id', $completedQuizzes->pluck('quiz_id'))
                ->paginate(12);
        } else {

            $todayQuizzes = Quiz::join('categories', 'quizzes.category_id', '=', 'categories.category_id')
                ->where('quizzes.status', 'approved')
                ->whereDate('quizzes.time', Carbon::today())
                ->get();

            $completedQuizzes = Quiz::join('categories', 'quizzes.category_id', '=', 'categories.category_id')
                ->where('quizzes.status', 'approved')
                ->whereIn('quiz_id', $userParticipation->pluck('quiz_id'))
                ->paginate(8);

            $activeQuizzes = Quiz::join('categories', 'quizzes.category_id', '=', 'categories.category_id')
                ->where('quizzes.status', 'approved')
                ->whereNotIn('quizzes.quiz_id', $todayQuizzes->pluck('quiz_id'))
                ->paginate(12);
        }

        $questions = Question::all();
        $participants = Participant::all();

        return view('quiz_play', compact('title', 'user', 'categories', 'todayQuizzes', 'activeQuizzes', 'questions', 'participants', 'completedQuizzes'));
    }


    public function selectCategory(Request $request)
    {
        $category = explode(',', $request->category);

        Session::put('selectedCategory', array("id" => $category[0], "title" => $category[1]));

        return redirect()->route('quiz');
    }

    public function quizStart($id)
    {
        return redirect()->route('quiz')->with('quizStart', $id);
    }

    public function quizPlay($id)
    {

        $reattempt = false;
        $user = Auth::user();
        $user_id = $user->user_id;
        $quiz_id = $id;
        $thisQuiz = Quiz::find($quiz_id);
        $questions = $thisQuiz->getQuestions();
        $quizCategory = category::where('category_id', $thisQuiz->category_id)->first();

        if (Participant::where('user_id', $user_id)->where('quiz_id', $quiz_id)->first()) {
            $reattempt = true;
        }

        if (!$reattempt) {
            Participant::create([
                'user_id' => $user_id,
                'quiz_id' => $quiz_id,
            ]);
        }

        $quiz = array();
        if (Session::has('quiz')) {
            $quiz = session()->get('quiz');
        }
        if (!array_key_exists('activeQuestion', $quiz)) {
            $quiz['activeQuestion'] = 0;
        }

        $quiz['timeStart'] = Carbon::now();

        Session::put('quiz', $quiz);

        $quiz = session()->get('quiz');
        $activeQuestion = $quiz['activeQuestion'];
        if (array_key_exists('answers', $quiz)) {
            $answers = $quiz['answers'];
        } else {
            $answers = null;
        }

        // dd((session()->get('quiz')));

        // dd(Participant::where('user_id', $user_id)->where('quiz_id', $quiz_id)->first());

        return view('quiz', compact('quiz', 'questions', 'activeQuestion', 'thisQuiz', 'quizCategory', 'answers'));
    }

    public function quizPlayJumpQuestion($id, $question)
    {
        if (Session::has('quiz')) {
            $quiz = session()->get('quiz');
        }
        $quiz['activeQuestion'] = $question;

        Session::put('quiz', $quiz);

        // dd($question);

        return redirect()->route('quiz.play', ['id' => $id]);
    }

    public function saveAnswer($quiz_id, $question_id, $option)
    {
        $answers = array();
        if (Session::has('quiz')) {
            $quiz = session()->get('quiz');
        }
        if (array_key_exists('answers', $quiz)) {
            $answers = $quiz['answers'];
        }
        $answers[$question_id] = $option;
        $quiz['answers'] = $answers;

        Session::put('quiz', $quiz);

        return response()->json(['message' => 'Option selected successfully', 'status' => 200]);
    }

    public function quizExit($id)
    {
        // dd($id);
        if (Session::has('quiz')) {
            Session::remove('quiz');
        }
        return redirect()->route('quiz.play', ['id' => $id])->with('warning', 'Are you sure, you want to exit quiz?')->with('buttonText', 'Yes')
            ->with('closeButtonText', 'No')->with('redirect_link', route('quiz'));
    }

    public function quizSubmit($id)
    {
        $quiz = array();
        if (Session::has('quiz')) {
            $quiz = session()->get('quiz');
        }
        Session::put('quiz', $quiz);
        $interval = $quiz['timeStart']->diff(Carbon::now());
        $timeConsumed = $interval->days * 24 * 60 + $interval->h * 60 + $interval->i;
        // dd($timeConsumed);

        $thisQuiz = Quiz::find($id);
        $questions = $thisQuiz->getQuestions();
        $participant = Participant::where('user_id', Auth::user()->user_id)->where('quiz_id', $id)->first();
        $answers = Session::get('quiz')['answers'];
        $userScore = Score::where('user_id', Auth::user()->user_id)->first();
        $score = 0;

        foreach ($answers as $question => $answer) {
            Answer::updateOrCreate([
                'user_id' => Auth::user()->user_id,
                'quiz_id' => $id,
                'participant_id' => $participant->participant_id,
                'question_id' => $question,
            ], [
                'user_id' => Auth::user()->user_id,
                'quiz_id' => $id,
                'participant_id' => $participant->participant_id,
                'question_id' => $question,
                'chosen_option' => $answer,
            ]);

            $question = Question::find($id);
            if ($question->correct_option == $answer) {
                $score++;
            }
        }

            Score::updateOrCreate([
                'user_id' => Auth::user()->user_id,
            ], [
                'user_id' => Auth::user()->user_id,
                'participant_id' => $participant->participant_id,
                'right_answer' => $score,
                'wrong_answer' => count($questions) - $score,
                'score_value' => ($userScore != null ? $userScore->score_value : 0) + $score,
                'time_consumed'=>$timeConsumed,
                'badge_id' => 1,
            ]);

        return redirect()->route('quiz.result', ['id' => $id]);
    }

    public function quizReattempt($id){

        Session::remove('quiz');

        return redirect()->route('quiz.play',['id'=>$id]);
    }
}
