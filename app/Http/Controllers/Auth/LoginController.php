<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\VerifyOtp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    function index()
    {
        return view('auth.login');
    }

    function processOTP($user)
    {
        $otp = rand(111111, 999999);
        Mail::to($user->email)->send(new VerifyOtp($user->name, $otp));
        session()->put(['otp' => ['code' => $otp, 'time' => now()]]);
    }

    function login(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt($credentials)) {

            $this->processOTP(Auth::user());
            return view('auth.login')->with('verify_otp', true);
        }

        // Authentication failed
        // Redirect the user back to the login page with an error message
        return redirect()->back()->withInput()->withErrors([
            'email' => 'Invalid credentials',
            'password' => 'Invalid credentials',
        ]);
    }
}
