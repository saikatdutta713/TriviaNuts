<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutAdminController extends Controller
{

    public function logout()
    {
        Auth::logout();

        return redirect()->route('admin.login.view');
    }
}
