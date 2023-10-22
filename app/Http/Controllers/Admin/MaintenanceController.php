<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

        return redirect()->back();
    }
}
