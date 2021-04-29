<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::orderBy('created_at', 'desc')->get();

        return response(['clients' => $clients]);
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

        $file =  $request->file('logo');
        $path = Storage::putFile('public/files', $file);
        $url = Storage::url($path);

        $client = new Client;
        $client->name = $request->name;
        $client->logo = $url;
        $client->save();

        return response(['client' => $client]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);
        if($client){
            return response(['client' => $client]);
        }else{
            return response(['message' => 'Client not found'], 404);
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

        $client = Client::find($id);
        if($client){
            $client->name = $request->name;
            $client->save();
            return response(['client' => $client]);
        }else{
            return response(['message' => 'Client not found'], 404);
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
        $client = Client::find($id);

        if($client){
            $client->delete();
            return response(['client' => $client]);
        }else{
            return response(['message' => 'Client not found'], 404);
        }
    }
}
