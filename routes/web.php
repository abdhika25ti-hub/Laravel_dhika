<?php

use App\Http\Controllers\Controller;
use App\http\Controllers\Controllers;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index']);

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

//Redirect
Route::get('/', [HomeController::class, 'index']);

Route::post('question/store', [QuestionController::class, 'store'])->name('question.store');

Route::get('question/response', [QuestionController::class, 'response'])->name('question.response');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('pelanggan', PelangganController::class);
