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
use App\Http\Controllers\TrendsController;
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
Route::get('/trends', [TrendsController::class, 'index'])->name('trends');

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

            Route::get('/quizzes', [QuizController::class, 'index'])->name('admin.quiz');
            Route::get('/quiz/add', [QuizController::class, 'viewAddForm'])->name('admin.quiz.add.view');
            Route::post('/quiz/add', [QuizController::class, 'addQuiz'])->name('admin.quiz.add');
            Route::get('/quiz/edit/{id}', [QuizController::class, 'viewEditForm'])->name('admin.quiz.edit.view');
            Route::post('/quiz/edit/{id}', [QuizController::class, 'editQuiz'])->name('admin.quiz.edit');
            Route::get('/quiz/delete/attempt/{id}', [QuizController::class, 'deleteAttemptQuiz'])->name('admin.quiz.delete.attempt');
            Route::get('/quiz/delete/{id}', [QuizController::class, 'deleteQuiz'])->name('admin.quiz.delete');

            Route::get('/questions', [QuestionController::class, 'index'])->name('admin.question');
            Route::get('/question/add', [QuestionController::class, 'viewAddForm'])->name('admin.question.add.view');
            Route::post('/question/add', [QuestionController::class, 'addQuestion'])->name('admin.question.add');
            Route::get('/question/edit/{id}', [QuestionController::class, 'viewEditForm'])->name('admin.question.edit.view');
            Route::post('/question/edit/{id}', [QuestionController::class, 'editQuestion'])->name('admin.question.edit');
            Route::get('/question/delete/attempt/{id}', [QuestionController::class, 'deleteAttemptQuestion'])->name('admin.question.delete.attempt');
            Route::get('/question/delete/{id}', [QuestionController::class, 'deleteQuestion'])->name('admin.question.delete');
        });

        Route::middleware('checkRole:1,2')->group(function () {
            Route::get('/users', [UserController::class, 'index'])->name('admin.user');
            Route::get('/user/add', [UserController::class, 'viewAddForm'])->name('admin.user.add.view');
            Route::post('/user/add', [UserController::class, 'addUser'])->name('admin.user.add');
            Route::get('/user/edit/{id}', [UserController::class, 'viewEditForm'])->name('admin.user.edit.view');
            Route::post('/user/edit/{id}', [UserController::class, 'editUser'])->name('admin.user.edit');
            Route::get('/user/delete/attempt/{id}', [UserController::class, 'deleteAttemptUser'])->name('admin.user.delete.attempt');
            Route::get('/user/delete/{id}', [UserController::class, 'deleteUser'])->name('admin.user.delete');

            Route::get('/announcement', function () {
                return view('admin.announcement');
            })->name('admin.announcement');
        });

        Route::middleware('checkRole:1')->group(function () {
            Route::get('/maintenance', [MaintenanceController::class, 'toggle'])->name('maintenance.toggle');
            Route::get('/settings', function () {
                return view('admin.settings');
            })->name('admin.settings');
        });
    });
});

Route::get('/test', [Controller::class, 'test']);