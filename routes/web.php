<?php

// use App\Http\Controllers\RegistrationController;

use App\Http\Controllers\Admin\Auth\AdminLoginController;
use App\Http\Controllers\Admin\Auth\VerifyOtpController as AuthVerifyOtpController;
use App\Http\Controllers\Auth\SetNewPasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutUserController;
use App\Http\Controllers\Auth\VerifyOtpController;
use App\Http\Controllers\Mail\VerificationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ResetPasswordController;
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

Route::get('/', [Controller::class, 'index'])->name('home');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('login/otp', [VerifyOtpController::class, 'index'])->name('verify.otp');
Route::post('login/otp', [VerifyOtpController::class, 'verifyOtp'])->name('verify.otp');
Route::get('register', [RegisterController::class, 'index'])->name('viewRegister');
Route::post('register', [RegisterController::class, 'register'])->name('register');
Route::get('verify/{token}', [VerificationController::class, 'verify'])->name('verify.mail');
Route::get('logout', [LogoutUserController::class, 'logout'])->name('logout');

Route::middleware('auth.check')->group(function () {
    Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');
});

Route::prefix('/update')->group(function () {
    Route::post('/profile', [ProfileController::class, 'updateProfile'])->name('update.profile');
    Route::post('/education', [ProfileController::class, 'updateEducation'])->name('update.education');
    Route::post('/bio', [ProfileController::class, 'updateBio'])->name('update.bio');
    Route::post('/socialMedia', [ProfileController::class, 'updateSocial'])->name('update.social');
    Route::post('/password', [ProfileController::class, 'updatePassword'])->name('update.password');
    Route::get('/password', [ProfileController::class, 'updatePassword'])->name('view.update.password');
})->middleware('web', 'auth.check');
Route::get('/master', function () {
    return view('layouts.master');
});

Route::get('/reset/Password/{token}', [ResetPasswordController::class, 'verifyResetToken'])->name('verify.reset.password');
Route::get('/reset/Password', [ResetPasswordController::class, 'passwordResetFormView'])->name('reset.password.view');
Route::post('/reset/Password', [ResetPasswordController::class, 'resetPassword'])->name('reset.password');
Route::post('/reset/link', [ResetPasswordController::class, 'sendLink'])->name('reset.link');


Route::get('/category', function () {
    return view('category');
})->name('category');

Route::get('/community', function () {
    return view('community');
})->name('community');

Route::get('/quiz', function () {
    return view('quiz');
});

Route::get('/sendmail', [EmailController::class, 'sendEmail']);

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'index'])->name('admin.login');
    Route::post('/login', [AdminLoginController::class, 'login'])->name('admin.login');
    Route::get('login/otp', [AuthVerifyOtpController::class, 'index'])->name('verify.otp');
    Route::post('login/otp', [AuthVerifyOtpController::class, 'verifyOtp'])->name('verify.otp');
    Route::get('logout', [LogoutUserController::class, 'logout'])->name('admin.logout');

    Route::get('/', function () {
        return view('admin.home');
    })->name('admin.home');

    Route::get('/manageusers', function () {
        return view('admin.manage_users');
    })->name('admin.user');

    Route::get('/managequiz', function () {
        return view('admin.manage_quiz');
    })->name('admin.quiz');

    Route::get('/managequestion', function () {
        return view('admin.manage_question');
    })->name('admin.question');

    Route::get('/announcement', function () {
        return view('admin.announcement');
    })->name('admin.announcement');
});

Route::get('/test', [Controller::class, 'test']);
