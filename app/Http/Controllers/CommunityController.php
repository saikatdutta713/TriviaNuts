<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    function index()
    {
        $title = "Community Page";
        return view('community',compact('title'));
        
    }
}