<?php

// use App\Http\Controllers\RegistrationController;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Mail\VerificationController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [QuoteController::class, 'index'])->name('home');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('register', [RegisterController::class, 'index'])->name('viewRegister');
Route::post('register', [RegisterController::class, 'register'])->name('register');
Route::get('verify/{token}', [VerificationController::class, 'verify'])->name('verify.mail');
Route::get('/master', function () {
    return view('layouts.master');
});

Route::get('/category', function () {
    return view('category');
});
Route::get('/community', function () {
    return view('community');
});
Route::get('/quiz', function () {
    return view('quiz');
});
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/sendmail', [EmailController::class, 'sendEmail']);
Route::get('logout', [LogoutController::class, 'logout']);

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.home');
    })->name('admin.home');

    Route::get('/manageusers', function () {
        return view('admin.manage_users');
    })->name('admin.user');
});

Route::get('/test', [Controller::class, 'test']);
