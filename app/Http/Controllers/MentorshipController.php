<?php

namespace App\Http\Controllers;

use App\Models\Mentorship;
use Illuminate\Http\Request;

class MentorshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mentorships = Mentorship::all();

        return response(['mentorships' => $mentorships]);
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
            'student_id' => 'required|integer',
            'mentor_id' => 'required|integer'
        ]);

        $mentorship = new Mentorship;
        $mentorship->student_id = $request->student_id;
        $mentorship->mentor_id = $request->mentor_id;
        $mentorship->save();

        return response(['mentorship' => $mentorship]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mentorship = Mentorship::find($id);
        if($mentorship){
            return response(['mentorship' => $mentorship]);
        }else{
            return response(['message' => 'Mentorship not found'], 404);
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
        $mentorship = Mentorship::find($id);
        if($mentorship){
            $mentorship->mentor_id = $request->mentor_id;
            $mentorship->student_id = $request->student_id;
            $mentorship->save();
            return response(['mentorship' => $mentorship]);
        }else{
            return response(['message' => 'Mentorship not found'], 404);
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
        $mentorship = Mentorship::find($id);

        if($mentorship){
            $mentorship->delete();
            return response(['mentorship' => $mentorship]);
        }else{
            return response(['message' => 'Mentorship not found'], 404);
        }
    }
}
