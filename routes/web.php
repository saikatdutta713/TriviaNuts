<?php

// use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\RegistrationController;
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
// Route::get('registration', [RegistrationController::class, 'index'])->name('registration');
// Route::post('registration', [RegistrationController::class, 'registration'])->name('registration');
Route::match(['get', 'post'], 'registration', [RegistrationController::class, 'registration'])->name('registration');
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

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.home');
    })->name('admin.home');

    Route::get('/allquizzes', function () {
        return view('admin.manage_quizzes');
    })->name('admin.allquizzes');
});