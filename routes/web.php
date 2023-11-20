<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/select-sector",[App\Http\Controllers\QuizController::class,"select_sector"]);
Route::get("/details-form/{id}",[App\Http\Controllers\QuizController::class,"details_form"]);
Route::get("/choose-game",[App\Http\Controllers\QuizController::class,"choose_game"]);
Route::get("/start-quiz/{id}",[App\Http\Controllers\QuizController::class,"start_quiz"]);
Route::get("/end-Quiz",[App\Http\Controllers\QuizController::class,"endQuiz"]);
Route::post("/add/Score",[App\Http\Controllers\QuizController::class,"addScore"]);

Route::get('/user', [UserController::class, 'index']);
Route::resource("/users",App\Http\Controllers\UserController::class);