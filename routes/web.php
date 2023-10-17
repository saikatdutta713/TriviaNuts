<?php

// use App\Http\Controllers\RegistrationController;

use App\Http\Controllers\Admin\Auth\AdminLoginController;
use App\Http\Controllers\Admin\Auth\LogoutAdminController;
use App\Http\Controllers\Admin\Auth\VerifyOtpController as AuthVerifyOtpController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Auth\SetNewPasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutUserController;
use App\Http\Controllers\Auth\VerifyOtpController;
use App\Http\Controllers\Mail\VerificationController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\QuizController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\AnnouncementController;

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


Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/community', [CommunityController::class, 'index'])->name('community');


Route::get('/quiz', function () {
    return view('quiz');
});

Route::get('/sendmail', [EmailController::class, 'sendEmail']);

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'index'])->name('admin.login');
    Route::post('/login', [AdminLoginController::class, 'login'])->name('admin.login');
    Route::get('login/otp', [AuthVerifyOtpController::class, 'index'])->name('verify.otp');
    Route::post('login/otp', [AuthVerifyOtpController::class, 'verifyOtp'])->name('verify.otp');
    Route::get('logout', [LogoutAdminController::class, 'logout'])->name('admin.logout');

    Route::middleware('admin.auth.check')->group(function () {
        Route::middleware('checkRole:1,2,3')->group(function () {
            Route::get('/', [HomeController::class, 'index'])->name('admin.home');
            Route::get('/managequiz', [QuizController::class, 'index'])->name('admin.quiz');
            Route::get('/managequestion', [QuestionController::class, 'index'])->name('admin.question');
        });

        Route::middleware('checkRole:1,2')->group(function () {
            Route::get('/users', [UserController::class, 'index'])->name('admin.user');
            Route::get('/user/add', [UserController::class, 'viewAddForm'])->name('admin.user.add');
            Route::post('/user/add', [UserController::class, 'addUser'])->name('admin.user.add');
            Route::get('/user/edit/{id}', [UserController::class, 'viewEditForm'])->name('admin.user.edit');
            Route::post('/user/edit/{id}', [UserController::class, 'editUser'])->name('admin.user.edit');

            // Route::get('/announcement', function () {
            //     return view('admin.announcement');
            // })->name('admin.announcement');
            Route::get('/announcement', [AnnouncementController::class, 'index'])->name('admin.announcement');
        });

        Route::middleware('checkRole:1')->group(function () {
            Route::get('/maintenance', [MaintenanceController::class, 'toggle'])->name('maintenance.toggle');
            // Route::get('/settings', function () {
            //     return view('admin.settings');
            // })->name('admin.settings');
            Route::get('/settings', [SettingsController::class, 'index'])->name('admin.settings');
            

        });
    });
});

Route::get('/test', [Controller::class, 'test']);