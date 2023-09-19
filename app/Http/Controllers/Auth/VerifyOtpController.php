<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VerifyOtpController extends Controller
{
    function index()
    {
        return view('auth.login')->with('verify_otp', true);
    }
    function verifyOtp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'otpInput' => 'required|digits:6',
        ]);

        if ($validator->fails()) {
            return redirect('/login/otp')->withErrors($validator)->withInput();
        }

        if (session()->has('otp') && session('otp.code') && session('otp.time')) {
            // Get the entered OTP from the form
            $enteredOTP = $request->input('otpInput');

            // Check if the entered OTP matches the stored OTP and is not expired
            if ($enteredOTP == session('otp.code') && now()->diffInMinutes(session('otp.time')) <= 5) {
                // OTP is valid, create a session for the user
                session(['authenticated' => true]);
                session()->forget('otp'); // Remove OTP data from session
                return redirect('/'); // Redirect to the dashboard or another page after login
            } else {
                // Invalid OTP
                return redirect('/login/otp')->withInput()->withErrors([
                    'otpInput' => 'Invalid OTP',
                ]);
            }
        } else {
            // OTP session data not found; proceed with login without OTP verification
            session(['authenticated' => true]);
            return redirect('/'); // Redirect to the dashboard or another page after login
        }
    }
}
