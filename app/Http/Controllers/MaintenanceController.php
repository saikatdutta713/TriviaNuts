<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class MaintenanceController extends Controller
{

    public function toggle(Request $request)
    {
        if (app()->isDownForMaintenance()) {
            Artisan::call('up');
        } else {
            Artisan::call('down');
        }

        return redirect()->route('admin.home');
    }
}
