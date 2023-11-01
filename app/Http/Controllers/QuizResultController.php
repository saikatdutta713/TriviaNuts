<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuizResultController extends Controller
{
    function index()
    {
        $title = "Quiz Result Page";
        return view('quiz_result',compact('title'));
        
    }
}