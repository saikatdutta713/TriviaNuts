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

                return view('home_page')
                    ->with('message_mailid_verify', 'Your email has been verified. You can now log in.')
                    ->with('status_mailid_verify', 'success');
            } else {
                return view('home_page')
                    ->with('message_mailid_verify', 'Your email is already verified. You can log in.')
                    ->with('status_mailid_verify', 'warning');
            }
        } catch (ModelNotFoundException $e) {
            return view('home_page')
                ->with('message_mailid_verify', 'Invalid verification token.')
                ->with('status_mailid_verify', 'error');
        }
    }
}