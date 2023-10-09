<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admin.manage_users', compact('users'));
    }

    public function viewAddForm()
    {
        $users = User::all();
        $add = true;
        return view('admin.manage_users', compact('users', 'add'));
    }

    public function viewEditForm($id)
    {
        $users = User::all();
        $edit = true;
        $editUser = User::find($id);
        if ($editUser) {
            return view('admin.manage_users', compact('users', 'edit', 'editUser'));
        } else {
            return redirect()->route('admin.user')->with('error_notification', 'User does not exists');
        }
    }

    public function addUser(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'unique:users,email'], // unique:table,column
            'gender' => ['required', 'in:Male,Female,Other'],
            'dob' => 'date',
            'Country' => ['required', 'string', 'max:255'],
            'password' => 'required|string|min:8',
            'confirm_password' => 'required|string|same:password',
            'terms' => 'required',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'gender' => $validatedData['gender'],
            'dob' => $validatedData['dob'],
            'last_login_location' => $validatedData['Country'],
            'email' => $validatedData['email'],
            'verification_token' => $validatedData['verification_token'],
            'password' => Hash::make($validatedData['password']),
        ]);

        if ($user) {
            Mail::to($user->email)->send(new WelcomeMail($user->name));

            return redirect()->route('admin.user')->with('success_notification', 'User added Successfully');
        } else {
            return back()->withInput()->withErrors(['An error occurred while adding the user']);
        }
    }
}
