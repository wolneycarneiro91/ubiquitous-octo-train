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
Route::apiResource('users', App\Http\Controllers\UserController::class)->middleware(['transaction']);


Route::prefix('auth')->group(function () {
    Route::post('login', [App\Http\Controllers\LoginController::class, 'login']);
    Route::post('logout', [App\Http\Controllers\LoginController::class, 'logout']);
});

Route::get('autenticar',[App\Http\Controllers\RegisterController::class,'verifyPermission']);
 Route::apiResource('donats',App\Http\Controllers\DonatsController::class);
 
 Route::apiResource('inspections',App\Http\Controllers\InspectionController::class)->middleware('auth:sanctum');