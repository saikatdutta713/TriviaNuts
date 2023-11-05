<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    function index()
    {
        $title = "Privacy Policy Page";
        return view('privacy',compact('title'));
        
    }
}