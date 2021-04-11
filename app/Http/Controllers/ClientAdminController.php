<?php

namespace App\Http\Controllers;

use App\Models\ClientAdmin;
use Illuminate\Http\Request;

class ClientAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientAdmins = ClientAdmin::all();

        return response(['clientAdmins' => $clientAdmins]);
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
            'client_id' => 'required|integer',
            'user_id' => 'required|integer',
            'role_id' => 'required|integer',
        ]);

        $clientAdmin = new ClientAdmin;
        $clientAdmin->client_id = $request->client_id;
        $clientAdmin->user_id = $request->user_id;
        $clientAdmin->role_id = $request->role_id;
        $clientAdmin->save();

        return response(['clientAdmin' => $clientAdmin]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientAdmin = ClientAdmin::find($id);
        if($clientAdmin){
            return response(['clientAdmin' => $clientAdmin]);
        }else{
            return response(['message' => 'ClientAdmin not found'], 404);
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
        $clientAdmin = ClientAdmin::find($id);
        if($clientAdmin){
            $clientAdmin->client_id = $request->client_id;
            $clientAdmin->user_id = $request->user_id;
            $clientAdmin->role_id = $request->role_id;
            $clientAdmin->save();
            return response(['clientAdmin' => $clientAdmin]);
        }else{
            return response(['message' => 'ClientAdmin not found'], 404);
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
        $clientAdmin = ClientAdmin::find($id);

        if($clientAdmin){
            $clientAdmin->delete();
            return response(['clientAdmin' => $clientAdmin]);
        }else{
            return response(['message' => 'Client Admin not found'], 404);
        }
    }
}
