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

Route::prefix('technician')->group(function(){
    Route::post('/register' , [\App\Http\Controllers\TechniciansController::class , 'register']);
    Route::post('/login' , [\App\Http\Controllers\TechniciansController::class , 'login']);
});



Route::middleware('auth:sanctum')->prefix('v1')->group(function(){
    Route::post('/logout' , [\App\Http\Controllers\TechniciansController::class , 'logout']);
});

