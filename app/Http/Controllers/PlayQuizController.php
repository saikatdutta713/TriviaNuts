<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayQuizController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('quiz', compact('user'));
    }
}
