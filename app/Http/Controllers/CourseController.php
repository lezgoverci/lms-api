<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();

        return response(['courses' => $courses]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'required|longText'
        ]);

        $course = new Course;
        $course->name = $request->name;
        $course->description = $request->description;
        $course->save();

        return response(['course' => $course]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        if($course){
            return response(['course' => $course]);
        }else{
            return response(['message' => 'Course not found'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        if($course){
            $course->name = $request->name;
            $course->description = $request->description;
            $course->save();
            return response(['course' => $course]);
        }else{
            return response(['message' => 'Course not found'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);

        if($course){
            $course->delete();
            return response(['course' => $course]);
        }else{
            return response(['message' => 'Course not found'], 404);
        }
    }

    /**
     * Add a faculty to a course
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function setFaculty(Request $request, $id){

        $data = $request->validate([
            'faculty_id' => 'required|integer',
        ]);

        $course = Course::find($id);

        $course->faculties()->attach($request->faculty_id);

        return response(['course' => $course]);
    }

    /**
     * Get all faculties
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getFaculties($id){


        $course = Course::find($id);
        if($course){
            return response(['faculties' => $course->faculties]);
        }else{
            return response(['message' => 'Course not found'], 404);
        }


    }

    /**
     * Add a school to a course
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function setSchool(Request $request, $id){

        $data = $request->validate([
            'school_id' => 'required|integer',
        ]);

        $course = Course::find($id);

        $course->schools()->attach($request->school_id);

        return response(['course' => $course]);
    }

    /**
     * Get all schools
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getSchools($id){


        $course = Course::find($id);
        if($course){
            return response(['schools' => $course->schools]);
        }else{
            return response(['message' => 'Course not found'], 404);
        }


    }

    /**
     * Add student to a course
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function setStudent(Request $request, $id){

        $data = $request->validate([
            'student_id' => 'required|integer',
        ]);

        $course = Course::find($id);

        $course->students()->attach($request->student_id);

        return response(['course' => $course]);
    }

    /**
     * Get all students
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getStudents($id){


        $course = Course::find($id);
        if($course){
            return response(['students' => $course->students]);
        }else{
            return response(['message' => 'Course not found'], 404);
        }


    }
}
