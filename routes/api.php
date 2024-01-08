<?php

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Rotas para autenticação via navegador
// Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('/login', 'Auth\LoginController@login');
// Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

// Rotas para autenticação via API
Route::post('/api/login', 'Auth\LoginController@login');
Route::middleware('auth:api')->post('/api/logout', 'Auth\LoginController@logout');
