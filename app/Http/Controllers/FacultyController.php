<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculty = Faculty::all();

        return response(['faculty' => $faculty]);
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
            'user_id' => 'required|integer',

        ]);

        $faculty = new Faculty;
        $faculty->user_id = $request->user_id;
        $faculty->course_id = $request->course_id;
        $faculty->save();

        return response(['faculty' => $faculty]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $faculty = Faculty::find($id);
        if($faculty){
            return response(['faculty' => $faculty]);
        }else{
            return response(['message' => 'Faculty not found'], 404);
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
        $faculty = Faculty::find($id);
        if($faculty){
            $faculty->user_id = $request->user_id;
            $faculty->course_id = $request->course_id;
            $faculty->save();
            return response(['faculty' => $faculty]);
        }else{
            return response(['message' => 'Faculty not found'], 404);
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
        $faculty = Faculty::find($id);

        if($faculty){
            $faculty->delete();
            return response(['faculty' => $faculty]);
        }else{
            return response(['message' => 'Faculty not found'], 404);
        }
    }
}
