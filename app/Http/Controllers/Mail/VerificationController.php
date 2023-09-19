<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

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

                return redirect('/')->with('success', 'Your email has been verified. You can now log in.');
            } else {
                return redirect('/')->with('warning', 'Your email is already verified. You can log in.');
            }
        } catch (ModelNotFoundException $e) {
            return redirect('/')->with('error', 'Invalid verification token.');
        }
    }
}
