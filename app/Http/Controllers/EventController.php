<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return response(['events' => $events]);
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
            'description' => 'required|longText',
            'date' => 'required|date'
        ]);

        $event = new Event;
        $event->name = $request->name;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->save();

        return response(['event' => $event]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        if($event){
            return response(['event' => $event]);
        }else{
            return response(['message' => 'Event not found'], 404);
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
        $event = Event::find($id);
        if($event){
            $event->name = $request->name;
            $event->description = $request->description;
            $event->date = $request->date;
            $event->save();
            return response(['event' => $event]);
        }else{
            return response(['message' => 'Event not found'], 404);
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
        $event = Event::find($id);

        if($event){
            $event->delete();
            return response(['event' => $event]);
        }else{
            return response(['message' => 'Event not found'], 404);
        }
    }
}
