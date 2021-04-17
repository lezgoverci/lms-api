<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();

        return response(['roles' => $roles]);
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

        $role = new Role;
        $role->name = $request->name;
        $role->save();

        return response(['role' => $role]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::find($id);
        if($role){
            return response(['role' => $role]);
        }else{
            return response(['message' => 'Role not found'], 404);
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

        $data = $request->validate([
            'name' => 'required|string',
        ]);

        $role = Role::find($id);
        if($role){
            $role->name = $request->name;
            $role->save();
            return response(['role' => $role]);
        }else{
            return response(['message' => 'Role not found'], 404);
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
        $role = Role::find($id);

        if($role){
            $role->delete();
            return response(['role' => $role]);
        }else{
            return response(['message' => 'Role not found'], 404);
        }
    }


    // /**
    //  * Add user to a role
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function setUser(Request $request, $id){

    //     $data = $request->validate([
    //         'user_id' => 'required|integer',
    //     ]);

    //     $role = Role::find($id);

    //     $role->users()->attach($request->user_id);

    //     return response(['role' => $role]);
    // }

    // /**
    //  * Get all users
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function getUsers($id){


    //     $role = Role::find($id);
    //     if($role){
    //         return response(['users' => $role->users]);
    //     }else{
    //         return response(['message' => 'Role not found'], 404);
    //     }


    // }
}
