<?php

use App\Http\Controllers\Api\ReceitasController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DetalhesController;
use App\Http\Controllers\HomeController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\ProfileController;
use App\Models\Receitas;
use Illuminate\Foundation\Application;
use Inertia\Inertia;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



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
// Minhas Cenas


Route::get('/', [HomeController::class, 'show'])->name('app');
Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('signup', [RegisterController::class, 'index'])->name('signup');
Route::post('signup', [RegisterController::class, 'register']);

Route::get('login', [ LoginController::class, 'index' ])->name('login');
Route::post('login', [ LoginController::class, 'login' ]);
Route::post('logout', [ LoginController::class, 'logout' ])->name('logout');


Route::post('/receitas', [ReceitasController::class,'store'])->name('receitas');

Route::get('detalhes/{receitaId}', [DetalhesController::class, 'index'])->name('detalhes');


