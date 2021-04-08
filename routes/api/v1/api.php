<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::prefix("/user")->group(function(){
    Route::post('/login',[LoginController::class, 'login']);
    Route::post('/store', [UserController::class, 'store']);
});

Route::middleware('auth:api')->group(function(){
    Route::prefix("/client")->group(function(){
        Route::post('/', [ClientController::class, 'store']);
        Route::get('/', [ClientController::class, 'store']);

    });
});
