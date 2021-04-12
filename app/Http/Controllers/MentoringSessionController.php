<?php

namespace App\Http\Controllers;

use App\Models\Mentorship;
use App\Models\MentoringSession;
use Illuminate\Http\Request;

class MentoringSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sessions = MentoringSession::all();

        return response(['sessions' => $sessions]);
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
            'mentorship_id' => 'required|integer',

        ]);

        $session = new MentoringSession;
        $session->mentorship_id = $request->mentorship_id;
        $session->save();

        return response(['session' => $session]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $session = MentoringSession::find($id);
        if($session){
            return response(['session' => $session]);
        }else{
            return response(['message' => 'Session not found'], 404);
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
        $session = MentoringSession::find($id);
        if($session){
            $session->mentorship_id = $request->mentorship_id;
            $session->save();
            return response(['session' => $session]);
        }else{
            return response(['message' => 'Session not found'], 404);
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
        $session = MentoringSession::find($id);

        if($session){
            $session->delete();
            return response(['session' => $session]);
        }else{
            return response(['message' => 'Session not found'], 404);
        }
    }

    /**
     * Add a mentorship to a session
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function setMentorship(Request $request, $id){

        $data = $request->validate([
            'mentorship_id' => 'required|integer',
        ]);

        $mentorship = Mentorship::find($id);
        $session = MentoringSession::find($request->mentoring_session_id);

        $session->mentorship()->save($mentorship);

        return response(['session' => $session]);
    }

    /**
     * Get all mentorship
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getMentorship($id){


        $session = MentoringSession::find($id);
        if($session){
            return response(['mentorship' => $session->mentorship]);
        }else{
            return response(['message' => 'Session not found'], 404);
        }


    }
}
