<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index()
    {
        $title = "Announcement Management"; // Fixed variable name
        return view('admin.announcement', compact('title'));
    }
}