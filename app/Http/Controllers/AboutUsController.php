<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
   function index()
    {
        $title = "About Us Page";
        return view('aboutUs',compact('title'));
        
    }
}