<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerificationController extends Controller
{
    public function verify(Request $request, $token)
    {
        try {
            $user = User::where("verification_token", $token)->firstOrFail();

            if ($user->email_verified_at == null) {
                $user->update([
                    'email_verified_at' => now(),
                    'verification_token' => null,
                ]);

                Auth::login($user);

                return redirect()->route('home')->with('success_notification', 'Your email has been verified.');
            } else {
                return redirect()->route('home')->with('warning_notification', 'Your email is already verified. You can log in.');
            }
        } catch (ModelNotFoundException $e) {
            return redirect()->route('home')->with('error_notification', 'Invalid verification token');
        }
    }
}
