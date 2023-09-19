<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function index(){
        return view('home');
    }

    function test(Request $request)
    {
        dd(User::where("verification_token", "y8U6WyiUzY3OLdk1YgC2ZLPxAx42dX9afNFEraPw")->update([
            'email_verified_at' => now(),
        ]));
        // dd(now());
    }
}
