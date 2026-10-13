<?php

use App\http\Controllers\Controllers;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index']);

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
