<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $title = "User Management"; // Fixed variable name
        return view('admin.manage_users', compact('users', 'title'));
    }

    public function viewAddForm()
    {
        $users = User::all();
        $add = true;
        $title = "Add User";
        return view('admin.manage_users', compact('users', 'add', 'title'));
    }

    public function viewEditForm($id)
    {
        $users = User::all();
        $edit = true;
        $editUser = User::find($id);
        $title = "Update User";
        if ($editUser) {
            return view('admin.manage_users', compact('users', 'edit', 'editUser', 'title'));
        } else {
            return redirect()->route('admin.user')->with('error_notification', 'User does not exists');
        }
    }

    public function addUser(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => ['required', 'unique:users,email'], // unique:table,column
            'gender' => ['required', 'in:Male,Female,Other'],
            'dob' => 'date',
            'country' => ['required', 'string', 'max:255'],
            'password' => 'required|string|min:8',
            'confirm_password' => 'required|string|same:password',
            'terms' => 'required',
        ], [
            'terms.accepted' => 'You must accept the terms and conditions.',
        ])->validate();

        $user = User::create([
            'name' => $request['name'],
            'gender' => $request['gender'],
            'dob' => $request['dob'],
            'last_login_location' => $request['country'],
            'email' => $request['email'],
            'verification_token' => $request['verification_token'],
            'password' => Hash::make($request['password']),
        ]);

        if ($user) {
            Mail::to($user->email)->send(new WelcomeMail($user->name));

            return redirect()->route('admin.user')->with('success_notification', 'User added Successfully');
        } else {
            return back()->withInput()->withErrors(['An error occurred while adding the user']);
        }
    }

    public function editUser(Request $request, $id)
    {

        $user = User::find(intval($id));

        $user->role = intval($request->role);
        $user->active = intval($request->status);

        $user->save();

        return redirect()->route('admin.user')->with('success_notification', 'User updated Successfully');
    }

    public function deleteAttemptUser($id)
    {
        $user = User::find($id);

        if ($user) {
            return redirect()->route('admin.user')
                ->with('warning', 'Are you sure?')
                ->with('buttonText', 'Yes')
                ->with('closeButtonText', 'No')
                ->with('redirect_link', route('admin.user.delete', ['id' => $id]));
        } else {
            return redirect()->route('admin.user')->with('error_notification', 'User not found or already deleted');
        }
    }

    public function deleteUser($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return redirect()->route('admin.user')->with('success_notification', 'User deleted Successfully');
        } else {
            return redirect()->route('admin.user')->with('error_notification', 'User not found or already deleted');
        }
    }

    public function getAllUser($tableLength = 5, $searchCriteria = "")
    {
        $tableLength = (int)$tableLength;

        // Create a base query for the users
        $query = User::query();

        // If search criteria is provided, filter the users
        if (!empty($searchCriteria)) {
            $query->where(function ($query) use ($searchCriteria) {
                $query->orWhere('users.user_id', 'like', '%' . $searchCriteria . '%')
                    ->orWhere('users.name', 'like', '%' . $searchCriteria . '%')
                    ->orWhere('users.gender', 'like', '%' . $searchCriteria . '%')
                    ->orWhere('users.email', 'like', '%' . $searchCriteria . '%')
                    ->orWhere('users.mobile', 'like', '%' . $searchCriteria . '%')
                    ->orWhere('users.picture', 'like', '%' . $searchCriteria . '%')
                    ->orWhere('users.course_name', 'like', '%' . $searchCriteria . '%')
                    ->orWhere('users.institution_name', 'like', '%' . $searchCriteria . '%')
                    ->orWhere('users.bio', 'like', '%' . $searchCriteria . '%')
                    ->orWhere('users.dob', 'like', '%' . $searchCriteria . '%')
                    ->orWhere('users.contribution_count', 'like', '%' . $searchCriteria . '%')
                    ->orWhere('users.facebook', 'like', '%' . $searchCriteria . '%')
                    ->orWhere('users.linkedin', 'like', '%' . $searchCriteria . '%')
                    ->orWhere('roles.name', 'like', '%' . $searchCriteria . '%')
                    ->orWhere('users.last_login_location', 'like', '%' . $searchCriteria . '%')
                    ->orWhere('users.login_type', 'like', '%' . $searchCriteria . '%');
            });
        }

        // Join with the 'roles' table to get the role name
        $query->join('roles', 'users.role', '=', 'roles.priority')
            ->select('users.*', 'roles.name AS role_name');

        // Paginate the results
        $users = $query->paginate($tableLength);

        return response()->json($users);
    }
}