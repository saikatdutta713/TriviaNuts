<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    function index()
    {
        $title = "Contact Us Page";
        return view('contactUs',compact('title'));
        
    }
}