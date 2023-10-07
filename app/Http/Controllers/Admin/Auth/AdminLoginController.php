<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Mail\VerifyMail;
use App\Mail\VerifyOtp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AdminLoginController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            return redirect()->route('admin.home');
        }
        return view('admin.auth.login');
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

            if (!auth()->user()->role) {
                auth()->logout();
                return redirect()->route('admin.login')->with('error_notification', 'You are not authorized');
            }

            // return redirect()->route('admin.home')->with('success_notification', 'Login Successful');

            if (!Auth::user()->active) {
                Auth::logout();
                return view('auth.login')->with('error', 'Your account is not active!');
            } elseif (Auth::user()->email_verified_at == null) {
                Auth::logout();
                return view('auth.login')->with('error', 'You are not verified. Please verify your account!');
            }

            $this->processOTP(Auth::user());
            return view('auth.login')->with('verify_otp', true);
        }

        return redirect()->back()->withInput()->withErrors([
            'email' => 'Invalid credentials',
            'password' => 'Invalid credentials',
        ]);
    }
}
