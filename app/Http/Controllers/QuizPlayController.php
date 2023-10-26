<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuizPlayController extends Controller
{
    function index()
    {
        $title = "Quiz Page";
        return view('quiz_play',compact('title'));
        
    }
}