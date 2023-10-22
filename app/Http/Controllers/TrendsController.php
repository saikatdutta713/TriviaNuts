<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrendsController extends Controller
{
    function index()
    {
        $title = "Trends Page";
        return view('trends',compact('title'));
        
    }
}