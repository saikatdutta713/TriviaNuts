<?php

use App\Http\Controllers\LoginController;
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

Route::get('/', function () { return view('home'); })->name('home');

Route::get('login', [LoginController::class,'index'])->name('login');
Route::post('login', [LoginController::class,'login'])->name('login');
Route::get('registration', [RegistrationController::class,'index']);
Route::get('/master', function () {  return view('layouts.master'); });

Route::get('/category', function () {
    return view('category');
});
Route::get('/quiz', function () {
    return view('quiz');
});