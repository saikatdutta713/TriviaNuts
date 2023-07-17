<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index(){
        return view('auth.login');
    }

    function login(Request $request){

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt($credentials)) {
            // Authentication successful
            // Redirect the user to the desired location
            return redirect()->intended('/');
        }

        // Authentication failed
        // Redirect the user back to the login page with an error message
        return redirect()->back()->withInput()->withErrors([
            'email' => 'Invalid credentials',
            'password' => 'Invalid credentials',
        ]);
    }
}
