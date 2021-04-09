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

    public function setSchool(Request $request){
        $data = $request->validate([
            'user_id' => 'required|integer',
            'school_id' => 'required|integer'
        ]);

        $user = User::find($request->user_id);
        $school = School::find($request->school_id);

        if($user && $school){
            $user->school()->associate($school);
            $user->save();
            return response(['user' => $user]);
        }else{
            return response(['message' => 'User or School not found'], 404);
        }
    }

    public function getSchool($user_id){


        $user = User::find($user_id);


        if($user){
            $school = $user->school;
            return response(['school' => $school]);
        }else{
            return response(['message' => 'User not found'], 404);
        }
    }
}
