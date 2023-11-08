<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TermsController extends Controller
{
    function index()
    {
        $title = "Terms & Conditions Page";
        return view('terms',compact('title'));
        
    }
}