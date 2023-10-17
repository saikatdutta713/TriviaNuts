<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $title = "Quiz Management"; // Fixed variable name
        return view('admin.manage_quiz', compact('title'));
    }
}