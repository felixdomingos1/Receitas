<?php

use App\Http\Controllers\Api\ReceitasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('receitas', [ReceitasController::class, 'index']);
Route::post('receitas', [ReceitasController::class, 'store']);