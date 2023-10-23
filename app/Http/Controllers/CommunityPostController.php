<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommunityPostController extends Controller
{
    function index()
    {
        $title = "Community Post Page";
        return view('community_post',compact('title'));
        
    }
}