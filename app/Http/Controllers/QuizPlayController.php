<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Participant;
use App\Models\Question;
use App\Models\Quiz;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class QuizPlayController extends Controller
{
    public function index()
    {
        $title = "Quiz Page";
        $user = Auth::user();
        $categories = Category::all();
        $selectedCategory = Session::get('selectedCategory')['title'];

        $userParticipation = Participant::where('user_id', Auth::user()->user_id)->get();

        if (Session::has('selectedCategory')) {

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
                ->get();

            $activeQuizzes = Quiz::join('categories', 'quizzes.category_id', '=', 'categories.category_id')
                ->where('quizzes.status', 'approved')
                ->whereNotIn('quizzes.quiz_id', $todayQuizzes->pluck('quiz_id'))
                ->paginate(8);
        }

        $questions = Question::all();
        $participants = Participant::all();

        return view('quiz_play', compact('title', 'user', 'categories', 'selectedCategory', 'todayQuizzes', 'activeQuizzes', 'questions', 'participants', 'completedQuizzes'));
    }


    public function selectCategory(Request $request)
    {
        $category = explode(',', $request->category);

        Session::put('selectedCategory', array("id" => $category[0], "title" => $category[1]));

        return redirect()->route('quiz_play');
    }

    public function quizStart($id)
    {
        return redirect()->route('quiz_play')->with('quizStart', $id);
    }

    public function quizPlay($id)
    {
        Participant::create([
            'user_id' => Auth::user()->user_id,
            'quiz_id' => $id,
        ]);
    }
}
