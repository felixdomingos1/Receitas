<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



// Route::get('/', [HomeController::class, 'index'])->name('app')->middleware('auth');
// Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [RegisterController::class, 'register']);

// Route::get('/login', [ LoginController::class, 'showLoginForm' ])->name('login')->middleware('auth');
// Route::post('/login', [ LoginController::class, 'login' ]);
// Route::post('/logout', [ LoginController::class, 'logout' ])->name('logout');


Route::get('/', [HomeController::class, 'showApp'])->name('app');
