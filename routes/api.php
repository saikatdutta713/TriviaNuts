<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\QuizController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get/users/{tableLength?}/{searchCriteria?}', [UserController::class, 'getAllUser'])->name('get.all.users');
Route::get('/get/questions/{tableLength?}/{searchCriteria?}', [QuestionController::class, 'getAllQuestions'])->name('get.all.questions');
Route::get('/get/quizzes/{tableLength?}/{searchCriteria?}', [QuizController::class, 'getAllQuizzes'])->name('get.all.quizzes');
