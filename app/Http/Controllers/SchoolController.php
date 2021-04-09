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
}
