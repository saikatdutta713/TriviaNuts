<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\VerifyMail;
use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    function index()
    {
        $title = "Registration Page";
        return view('auth.register', compact('title'))->with('verificationMail', false);
    }

    function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'in:Male,Female,Other'],
            'dob' => ['required', 'string', 'max:255'],
            'Country' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'terms' => ['accepted'],
        ], [
            'terms.accepted' => 'You must accept the terms and conditions.',
        ]);
    }

    function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'gender' => $data['gender'],
            'dob' => $data['dob'],
            'last_login_location' => $data['Country'],
            'email' => $data['email'],
            'verification_token' => $data['verification_token'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function sendEmail($user)
    {
        $verificationUrl = route('verify.mail', ['token' => $user->verification_token]);
        Mail::to($user->email)->send(new WelcomeMail($user->name));

        Mail::to($user->email)->send(new VerifyMail($verificationUrl));
    }

    function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        if ($user) {
            if (!Session::has('socialite')) {
                $this->sendEmail($user);
                return view('auth.register')->with('verificationMail', true);
            } else {
                $user->update([
                    'email_verified_at' => now(),
                    'verification_token' => null,
                ]);
                Mail::to($user->email)->send(new WelcomeMail($user->name));
                Auth::login($user);
                return redirect()->route('home_page')->with('success_notification', 'Login Successful!');
            }
        }
    }
}