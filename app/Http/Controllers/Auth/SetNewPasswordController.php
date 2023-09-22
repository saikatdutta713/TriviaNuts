<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SetNewPasswordController extends Controller
{
    public function index()
    {
        return view('auth.setNewPassword');
    }

    public function updatePassword(Request $request)
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

        // If validation passes, proceed to update the password
        $newPassword = $request->input('new_password');

        // Your logic to update the password goes here

        return redirect('/home')->with('success', 'Password updated successfully!');
    }
}