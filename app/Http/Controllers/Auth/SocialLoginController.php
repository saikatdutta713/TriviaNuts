<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{
    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleHandle()
    {
        try {
            $user = Socialite::driver('google')->user();

            if (User::where('email', $user->getEmail())->first()) {
                Auth::login(User::where('email', $user->getEmail())->first());

                return redirect()->route('home')->with('success_notification', 'Hello ' . $user->getName() . ', You have successfully logged in');
            } else {
                $inputData = [
                    'name' => $user->getName(),
                    'last_login_location' => "",
                    'email' => $user->getEmail(),
                    'password' => "",
                ];

                Session::put('socialite', true);

                return redirect()->route('viewRegister')->withInput($inputData);
            }
        } catch (Exception $e) {
            return redirect()->route('login')->with('error', 'An error occured! Please try again');
        }
    }
}
