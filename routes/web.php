<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;



// Route::get('/', [HomeController::class, 'index'])->name('app')->middleware('auth');
// Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [RegisterController::class, 'register']);

// Route::get('/login', [ LoginController::class, 'showLoginForm' ])->name('login')->middleware('auth');
// Route::post('/login', [ LoginController::class, 'login' ]);


Route::get('/', [HomeController::class, 'showApp'])->name('app');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [ LoginController::class, 'login' ]);

Route::get('signup', [RegisterController::class, 'index'])->name('signup');
Route::post('signup',[RegisterController::class, 'register']);

Route::post('/logout', [ LoginController::class, 'logout' ])->name('logout');

