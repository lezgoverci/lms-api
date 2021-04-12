<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::all();

        return response(['schools' => $schools]);
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
        ]);

        $school = new School;
        $school->name = $request->name;
        $school->client_id = $request->client_id;
        $school->save();

        return response(['school' => $school]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $school = School::find($id);
        if($school){
            return response(['school' => $school]);
        }else{
            return response(['message' => 'School not found'], 404);
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
        $school = School::find($id);
        if($school){
            $school->name = $request->name;
            $school->client_id = $request->client_id;
            $school->save();
            return response(['school' => $school]);
        }else{
            return response(['message' => 'School not found'], 404);
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
        $school = School::find($id);

        if($school){
            $school->delete();
            return response(['school' => $school]);
        }else{
            return response(['message' => 'School not found'], 404);
        }
    }

    /**
     * Add a course to a school
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function setCourse(Request $request, $id){

        $data = $request->validate([
            'course_id' => 'required|integer',
        ]);

        $school = School::find($id);

        $school->courses()->attach($request->course_id);

        return response(['school' => $school]);
    }

    /**
     * Get all courses
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getCourses($id){


        $school = School::find($id);
        if($school){
            return response(['courses' => $school->courses]);
        }else{
            return response(['message' => 'School not found'], 404);
        }


    }

    /**
     * Add a faculty to a school
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function setFaculty(Request $request, $id){

        $data = $request->validate([
            'faculty_id' => 'required|integer',
        ]);

        $school = School::find($id);

        $school->faculties()->attach($request->faculty_id);

        return response(['school' => $school]);
    }

    /**
     * Get all faculties
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getFaculties($id){


        $school = School::find($id);
        if($school){
            return response(['faculties' => $school->faculties]);
        }else{
            return response(['message' => 'School not found'], 404);
        }


    }

    /**
     * Add a student to a school
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function setStudent(Request $request, $id){

        $data = $request->validate([
            'student_id' => 'required|integer',
        ]);

        $school = School::find($id);

        $school->students()->attach($request->student_id);

        return response(['school' => $school]);
    }

    /**
     * Get all students
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getStudents($id){


        $school = School::find($id);
        if($school){
            return response(['students' => $school->students]);
        }else{
            return response(['message' => 'School not found'], 404);
        }


    }
}
