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
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ClientAdminController;
use App\Http\Controllers\MentorshipController;
use App\Http\Controllers\PartnerAdminController;
use App\Http\Controllers\MentoringSessionController;

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

        //Roles
        Route::get('/{id}/role', [UserController::class, 'getRoles']);
        Route::post('/{id}/role', [UserController::class, 'setRole']);

        //Events
        Route::get('/{id}/event', [UserController::class, 'getEvents']);
        Route::post('/{id}/event', [UserController::class, 'setEvent']);


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

        //Students
        Route::get('/{id}/student', [SchoolController::class, 'getStudents']);
        Route::post('/{id}/student', [SchoolController::class, 'setStudent']);

        //Faculties
        Route::get('/{id}/faculty', [SchoolController::class, 'getFaculties']);
        Route::post('/{id}/faculty', [SchoolController::class, 'setFaculty']);

        //Courses
        Route::get('/{id}/course', [SchoolController::class, 'getCourses']);
        Route::post('/{id}/course', [SchoolController::class, 'setCourse']);

        Route::get('/', [SchoolController::class, 'index']);
        Route::post('/', [SchoolController::class, 'store']);
        Route::get('/{id}', [SchoolController::class, 'show']);
        Route::post('/{id}', [SchoolController::class, 'update']);
        Route::delete('/{id}', [SchoolController::class, 'destroy']);
    });

    Route::prefix("/student")->group(function(){


        // Courses
        Route::get('/{id}/course', [StudentController::class, 'getCourses']);
        Route::post('/{id}/course', [StudentController::class, 'setCourse']);

        // Schools
        Route::get('/{id}/school', [StudentController::class, 'getSchool']);
        Route::post('/{id}/school', [StudentController::class, 'setSchool']);


        Route::get('/', [StudentController::class, 'index']);
        Route::post('/', [StudentController::class, 'store']);
        Route::get('/{id}', [StudentController::class, 'show']);
        Route::post('/{id}', [StudentController::class, 'update']);
        Route::delete('/{id}', [StudentController::class, 'destroy']);
    });

    Route::prefix("/faculty")->group(function(){


        // Schools
        Route::get('/{id}/school', [FacultyController::class, 'getSchools']);
        Route::post('/{id}/school', [FacultyController::class, 'setSchool']);

        // Courses
        Route::get('/{id}/course', [FacultyController::class, 'getCourses']);
        Route::post('/{id}/course', [FacultyController::class, 'setCourse']);

        Route::get('/', [FacultyController::class, 'index']);
        Route::post('/', [FacultyController::class, 'store']);
        Route::get('/{id}', [FacultyController::class, 'show']);
        Route::post('/{id}', [FacultyController::class, 'update']);
        Route::delete('/{id}', [FacultyController::class, 'destroy']);


    });

    Route::prefix("/course")->group(function(){


        //Student
        Route::get('/{id}/student', [CourseController::class, 'getStudents']);
        Route::post('/{id}/student', [CourseController::class, 'setStudent']);

        //Schools
        Route::get('/{id}/school', [CourseController::class, 'getSchools']);
        Route::post('/{id}/school', [CourseController::class, 'setSchool']);

        //Faculties
        Route::get('/{id}/faculty', [CourseController::class, 'getFaculties']);
        Route::post('/{id}/faculty', [CourseController::class, 'setFaculty']);

        Route::get('/', [CourseController::class, 'index']);
        Route::post('/', [CourseController::class, 'store']);
        Route::get('/{id}', [CourseController::class, 'show']);
        Route::post('/{id}', [CourseController::class, 'update']);
        Route::delete('/{id}', [CourseController::class, 'destroy']);
    });

    Route::prefix("/event")->group(function(){


        //Users
        Route::get('/{id}/participant', [EventController::class, 'setUser']);
        Route::post('/{id}/participant', [EventController::class, 'getUsers']);



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

    Route::prefix("/post")->group(function(){
        Route::get('/', [PostController::class, 'index']);
        Route::post('/', [PostController::class, 'store']);
        Route::get('/{id}', [PostController::class, 'show']);
        Route::post('/{id}', [PostController::class, 'update']);
        Route::delete('/{id}', [PostController::class, 'destroy']);
    });

    Route::prefix("/role")->group(function(){

        //Users
        Route::get('/{id}/user', [RoleController::class, 'getUsers']);
        Route::post('/{id}/user', [RoleController::class, 'setUser']);

        Route::get('/', [RoleController::class, 'index']);
        Route::post('/', [RoleController::class, 'store']);
        Route::get('/{id}', [RoleController::class, 'show']);
        Route::post('/{id}', [RoleController::class, 'update']);
        Route::delete('/{id}', [RoleController::class, 'destroy']);
    });

    Route::prefix("/client/admin")->group(function(){
        Route::get('/', [ClientAdminController::class, 'index']);
        Route::post('/', [ClientAdminController::class, 'store']);
        Route::get('/{id}', [ClientAdminController::class, 'show']);
        Route::post('/{id}', [ClientAdminController::class, 'update']);
        Route::delete('/{id}', [ClientAdminController::class, 'destroy']);
    });

    Route::prefix("/mentorship")->group(function(){

        //Sessions
        Route::get('/{id}/session', [MentorshipController::class, 'getSessions']);
        Route::post('/{id}/session', [MentorshipController::class, 'setSession']);

        Route::get('/', [MentorshipController::class, 'index']);
        Route::post('/', [MentorshipController::class, 'store']);
        Route::get('/{id}', [MentorshipController::class, 'show']);
        Route::post('/{id}', [MentorshipController::class, 'update']);
        Route::delete('/{id}', [MentorshipController::class, 'destroy']);
    });


    Route::prefix("/mentoring-session")->group(function(){


        //Mentorships
        Route::get('/{id}/mentorship', [MentoringSessionController::class, 'getMentorship']);
        Route::post('/{id}/mentorship', [MentoringSessionController::class, 'setMentorship']);

        Route::get('/', [MentoringSessionController::class, 'index']);
        Route::post('/', [MentoringSessionController::class, 'store']);
        Route::get('/{id}', [MentoringSessionController::class, 'show']);
        Route::post('/{id}', [MentoringSessionController::class, 'update']);
        Route::delete('/{id}', [MentoringSessionController::class, 'destroy']);
    });

    Route::prefix("/partner/admin")->group(function(){
        Route::get('/', [PartnerAdminController::class, 'index']);
        Route::post('/', [PartnerAdminController::class, 'store']);
        Route::get('/{id}', [PartnerAdminController::class, 'show']);
        Route::post('/{id}', [PartnerAdminController::class, 'update']);
        Route::delete('/{id}', [PartnerAdminController::class, 'destroy']);
    });
});
