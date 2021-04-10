<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PartnershipController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MentorController;

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
    Route::post('/register', [UserController::class, 'store']);
});

Route::middleware('auth:api')->group(function(){

    Route::prefix("/user")->group(function(){
        Route::get('/', [UserController::class, 'index']);
        Route::post('/', [UserController::class, 'store']);
        Route::get('/{id}', [UserController::class, 'show']);
        Route::post('/{id}', [UserController::class, 'update']);
        Route::delete('/{id}', [UserController::class, 'destroy']);

    });

    Route::prefix("/client")->group(function(){
        Route::get('/', [ClientController::class, 'index']);
        Route::post('/', [ClientController::class, 'store']);
        Route::get('/{id}', [ClientController::class, 'show']);
        Route::post('/{id}', [ClientController::class, 'update']);
        Route::delete('/{id}', [ClientController::class, 'destroy']);
    });

    Route::prefix("/partner")->group(function(){
        Route::get('/', [PartnerController::class, 'index']);
        Route::post('/', [PartnerController::class, 'store']);
        Route::get('/{id}', [PartnerController::class, 'show']);
        Route::post('/{id}', [PartnerController::class, 'update']);
        Route::delete('/{id}', [PartnerController::class, 'destroy']);
    });

    Route::prefix("/partnership")->group(function(){
        Route::get('/', [PartnershipController::class, 'index']);
        Route::post('/', [PartnershipController::class, 'store']);
        Route::get('/{id}', [PartnershipController::class, 'show']);
        Route::post('/{id}', [PartnershipController::class, 'update']);
        Route::delete('/{id}', [PartnershipController::class, 'destroy']);
    });

    Route::prefix("/school")->group(function(){
        Route::get('/', [SchoolController::class, 'index']);
        Route::post('/', [SchoolController::class, 'store']);
        Route::get('/{id}', [SchoolController::class, 'show']);
        Route::post('/{id}', [SchoolController::class, 'update']);
        Route::delete('/{id}', [SchoolController::class, 'destroy']);
    });

    Route::prefix("/student")->group(function(){
        Route::get('/', [StudentController::class, 'index']);
        Route::post('/', [StudentController::class, 'store']);
        Route::get('/{id}', [StudentController::class, 'show']);
        Route::post('/{id}', [StudentController::class, 'update']);
        Route::delete('/{id}', [StudentController::class, 'destroy']);
    });

    Route::prefix("/faculty")->group(function(){
        Route::get('/', [FacultyController::class, 'index']);
        Route::post('/', [FacultyController::class, 'store']);
        Route::get('/{id}', [FacultyController::class, 'show']);
        Route::post('/{id}', [FacultyController::class, 'update']);
        Route::delete('/{id}', [FacultyController::class, 'destroy']);
    });

    Route::prefix("/course")->group(function(){
        Route::get('/', [CourseController::class, 'index']);
        Route::post('/', [CourseController::class, 'store']);
        Route::get('/{id}', [CourseController::class, 'show']);
        Route::post('/{id}', [CourseController::class, 'update']);
        Route::delete('/{id}', [CourseController::class, 'destroy']);
    });

    Route::prefix("/event")->group(function(){
        Route::get('/', [EventController::class, 'index']);
        Route::post('/', [EventController::class, 'store']);
        Route::get('/{id}', [EventController::class, 'show']);
        Route::post('/{id}', [EventController::class, 'update']);
        Route::delete('/{id}', [EventController::class, 'destroy']);
    });

    Route::prefix("/mentor")->group(function(){
        Route::get('/', [MentorController::class, 'index']);
        Route::post('/', [MentorController::class, 'store']);
        Route::get('/{id}', [MentorController::class, 'show']);
        Route::post('/{id}', [MentorController::class, 'update']);
        Route::delete('/{id}', [MentorController::class, 'destroy']);
    });
});
