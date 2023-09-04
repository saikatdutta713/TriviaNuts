<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{


    public function registration(Request $request)
    {
        // Handle form submission, validation, and user registration
        return view('auth.register');
    }
}