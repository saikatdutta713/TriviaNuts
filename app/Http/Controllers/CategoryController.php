<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index()
    {
        $title = "Category Page";
        $user = auth()->user();
        return view('category', compact('title', 'user'));
    }
}
