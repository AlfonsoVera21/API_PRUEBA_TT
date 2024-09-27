<?php

use App\Http\Controllers\CargoController;
use App\Http\Controllers\DepartamentoController;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
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
Route::apiResource('users', UserController::class);

Route::get('cargos', [CargoController::class, 'index']);
Route::get('cargos/{id}', [CargoController::class, 'show']);

Route::get('departamentos', [DepartamentoController::class, 'index']);
Route::get('departamentos/{id}', [DepartamentoController::class, 'show']);
