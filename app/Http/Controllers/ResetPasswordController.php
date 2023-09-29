<?php

namespace App\Http\Controllers;

use App\Mail\ResetPasswordMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ResetPasswordController extends Controller
{
    public function passwordResetFormView()
    {
        if (!$this->isValidPasswordResetToken()) {
            return redirect('/login')->with('error_notification', 'Password reset link expired!');
        }

        return view('auth.resetPassword');
    }

    public function sendLink(Request $request)
    {
        $email = $request->email;
        $user = User::where('email', $email)->first();

        if (!$user) {
            return redirect()->route('login')->with('error', 'This email id is not registered yet!');
        }

        $token = Str::random(40);
        $user->update(['reset_token' => $token]);

        Mail::to($email)->send(new ResetPasswordMail(route('verify.reset.password', ['token' => $token]), $user->name));

        return view('auth.login')->with("success", "We have sent you an email to reset your password");
    }

    public function verifyResetToken(Request $request)
    {
        $token = $request->token;
        $user = User::where('reset_token', $token)->first();

        if (!$user) {
            return redirect()->route('login')->with('error_notification', 'Invalid password reset token!');
        }

        Session::put('PasswordResetToken', $token);
        return redirect()->route('reset.password.view');
    }

    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|same:new_password',
        ], [
            'confirm_password.same' => 'The confirmation password must match the new password.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if (!$this->isValidPasswordResetToken()) {
            return redirect()->route('login')->with('error_notification', 'Invalid password reset token!');
        }

        $user = User::where('reset_token', Session::get('PasswordResetToken'))->first();

        if ($user) {
            $user->update(['password' => Hash::make($request->input('new_password'))]);
            Session::remove('PasswordResetToken');
            return redirect('/login')->with('success_notification', 'Password updated successfully!');
        }

        return redirect()->route('login')->with('error_notification', 'Invalid password reset token!');
    }

    protected function isValidPasswordResetToken()
    {
        return Session::has('PasswordResetToken') && User::where('reset_token', Session::get('PasswordResetToken'))->exists();
    }
}
