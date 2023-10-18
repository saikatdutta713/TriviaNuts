<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $title = "Settings"; // Fixed variable name
        return view('admin.settings', compact('title'));
    }
}