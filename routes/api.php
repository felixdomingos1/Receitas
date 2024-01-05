<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ReceitasController;
use App\Http\Controllers\api\AvaliarReceitasController;

Route::get('receitas', [ ReceitasController::class, 'index']);
Route::post('receitas', [ ReceitasController::class, 'store']);

Route::get('avaliarReceitas', [ AvaliarReceitasController::class, 'index']);
Route::post('avaliarReceitas/{receitaId}', [ AvaliarReceitasController::class, 'store']);
