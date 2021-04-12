<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return response(['users' => $users]);
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
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return response(['user' => $user]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        if($user){
            return response(['user' => $user]);
        }else{
            return response(['message' => 'User not found'], 404);
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
        $user = User::find($id);
        if($user){
            $user->name = $request->name;
            $user->email = $request->email;
            $user->school_id = $request->school_id;
            $user->save();
            return response(['user' => $user]);
        }else{
            return response(['message' => 'User not found'], 404);
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
        $user = User::find($id);

        if($user){
            $user->delete();
            return response(['user' => $user]);
        }else{
            return response(['message' => 'User not found'], 404);
        }
    }


    /**
     * Add event to a user
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function setEvent(Request $request, $id){

        $data = $request->validate([
            'event_id' => 'required|integer',
        ]);

        $user = User::find($id);

        $user->events()->attach($request->event_id);

        return response(['user' => $user]);
    }

    /**
     * Get all events
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getEvents($id){


        $user = User::find($id);
        if($user){
            return response(['events' => $user->events]);
        }else{
            return response(['message' => 'User not found'], 404);
        }


    }


    /**
     * Add a role to a user
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function setRole(Request $request, $id){

        $data = $request->validate([
            'role_id' => 'required|integer',
        ]);

        $user = User::find($id);

        $user->roles()->attach($request->role_id);

        return response(['user' => $user]);
    }

    /**
     * Get all roles
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getRoles($id){


        $user = User::find($id);
        if($user){
            return response(['roles' => $user->roles]);
        }else{
            return response(['message' => 'User not found'], 404);
        }


    }


}
