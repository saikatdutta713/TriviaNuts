<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function showProfile()
    {
        $user = auth()->user();
        $title = "Profile Page";
        return view('profile', compact('title', 'user'));
    }

    public function updateProfile(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'date',
            'profileImage' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = User::find(auth()->user()->user_id);

        if ($request->hasFile('profileImage')) {

            $image = $request->file('profileImage');

            $fileName = time() . rand(1, 50) . '.' . $image->getClientOriginalExtension();

            $image->storeAs('public/avatars', $fileName);

            if ($user->picture) {
                Storage::disk('public')->delete('/avatars/' . $user->picture);
            }

            $user->picture = $fileName;
        }

        $user->name = $validatedData['name'];
        $user->dob = $validatedData['dob'];

        $user->save();

        return redirect()->route('profile')
            ->with('notification_type', 'success')
            ->with('notification_message', 'Profile updated successfully');
    }

    public function updateEducation(Request $request)
    {
        $validatedData = $request->validate([
            'courseName' => 'required|string|max:255',
            'institutionName' => 'required|string|max:255',
        ]);

        $user = User::find(auth()->user()->user_id);

        $user->course_name = $validatedData['courseName'];
        $user->institution_name = $validatedData['institutionName'];

        $user->save();

        return redirect()->route('profile')
            ->with('cuser', $user)
            ->with('notification_type', 'success')
            ->with('notification_message', 'Education details updated successfully');
    }

    public function updateBio(Request $request)
    {
        $validatedData = $request->validate([
            'profileBio' => 'required|string',
        ]);

        $user = User::find(auth()->user()->user_id);

        $user->bio = $validatedData['profileBio'];

        $user->save();

        return redirect()->route('profile')->with('notification_type', 'success')
            ->with('notification_message', 'Bio updated successfully');
    }

    public function updateSocial(Request $request)
    {
        $validatedData = $request->validate([
            'facebookProfile' => 'string|max:255',
            'linkedinProfile' => 'string|max:255',
        ]);

        $user = User::find(auth()->user()->user_id);

        $user->facebook = $validatedData['facebookProfile'];
        $user->linkedin = $validatedData['linkedinProfile'];

        $user->save();

        return redirect()->route('profile')->with('notification_type', 'success')
            ->with('notification_message', 'Social links updated successfully');
    }

    public function updatePassword(Request $request)
    {
        $validatedData = $request->validate([
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:8',
            'confirm_password' => 'required|string|same:new_password'
        ]);

        $user = User::find(auth()->user()->user_id);

        if (!Hash::check($validatedData['current_password'], $user->password)) {
            return redirect()->route('profile')->with('notification_type', 'error')
                ->with('notification_message', 'Current password is incorrect');
        }

        $user->password = Hash::make($validatedData['new_password']);
        $user->save();

        return redirect()->route('profile')->with('notification_type', 'success')
            ->with('notification_message', 'Password changed successfully');
    }
}
