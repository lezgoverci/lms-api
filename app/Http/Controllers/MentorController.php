<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mentors = Mentor::all();

        return response(['mentors' => $mentors]);
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

        $mentor = new Mentor;
        $mentor->user_id = $request->user_id;
        $mentor->save();

        return response(['mentor' => $mentor]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mentor = Mentor::find($id);
        if($mentor){
            return response(['mentor' => $mentor]);
        }else{
            return response(['message' => 'Mentor not found'], 404);
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
        $mentor = Mentor::find($id);
        if($mentor){
            $mentor->user_id = $request->user_id;
            $mentor->save();
            return response(['mentor' => $mentor]);
        }else{
            return response(['message' => 'Mentor not found'], 404);
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
        $mentor = Mentor::find($id);

        if($mentor){
            $mentor->delete();
            return response(['mentor' => $mentor]);
        }else{
            return response(['message' => 'Mentor not found'], 404);
        }
    }
}
