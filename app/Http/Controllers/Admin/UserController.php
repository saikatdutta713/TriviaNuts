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

    public function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => ['required', 'unique:users,email'], // unique:table,column
            'gender' => ['required', 'in:Male,Female,Other'],
            'dob' => 'date',
            'Country' => ['required', 'string', 'max:255'],
            'password' => 'required|string|min:8',
            'confirm_password' => 'required|string|same:password',
            'terms' => 'required',
        ], [
            'terms.accepted' => 'You must accept the terms and conditions.',
        ]);
    }

    public function addUser(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = User::create([
            'name' => $request['name'],
            'gender' => $request['gender'],
            'dob' => $request['dob'],
            'last_login_location' => $request['Country'],
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

    public function getAllUser($tableLength = 5, $searchCriteria = "")
    {
        if ($searchCriteria != "") {
            $columns = ["user_id", "name", "gender", "email", "mobile", "picture", "course_name", "institution_name", "bio", "dob", "contribution_count", "facebook", "linkedin", "role", "last_login_location", "login_type"];

            $queryBuilder = User::where(function ($query) use ($columns, $searchCriteria) {
                foreach ($columns as $column) {
                    $query->orWhere($column, 'like', '%' . $searchCriteria . '%');
                }
            });

            $users = $queryBuilder->paginate($tableLength);

            return response()->json($users);
        }
        $tableLength = (int)$tableLength;
        return response()->json(User::paginate($tableLength));
    }

    public function search($searchCriteria)
    {
        $columns = ["user_id", "name", "gender", "email", "mobile", "picture", "course_name", "institution_name", "bio", "dob", "contribution_count", "facebook", "linkedin", "role", "last_login_location", "login_type"];

        $queryBuilder = User::where(function ($query) use ($columns, $searchCriteria) {
            foreach ($columns as $column) {
                $query->orWhere($column, 'like', '%' . $searchCriteria . '%');
            }
        });

        $users = $queryBuilder->get();

        return response()->json($users);
    }
}
