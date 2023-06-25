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
 Route::apiResource('donortypes',App\Http\Controllers\DonorTypeController::class);
 
 Route::apiResource('inspections',App\Http\Controllers\InspectionController::class);

 Route::post('sendmail',[App\Http\Controllers\MailController::class,'enviarEmail']);
 
 Route::apiResource('planstypes',App\Http\Controllers\PlansTypeController::class)->middleware(['transaction']);
 
 Route::apiResource('leveldonors',App\Http\Controllers\LevelDonorController::class)->middleware(['transaction']);
 
 
 Route::apiResource('plataforms',App\Http\Controllers\PlataformController::class)->middleware(['transaction']);
 
 Route::apiResource('fundtypes',App\Http\Controllers\FundTypeController::class)->middleware(['transaction']);
 
 Route::apiResource('profiles',App\Http\Controllers\ProfileController::class)->middleware(['transaction']);
 
 Route::apiResource('typefiles',App\Http\Controllers\TypeFileController::class)->middleware(['transaction']);
 
 Route::apiResource('files',App\Http\Controllers\FileController::class)->middleware(['transaction']);