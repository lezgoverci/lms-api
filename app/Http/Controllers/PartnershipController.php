<?php

namespace App\Http\Controllers;

use App\Models\Partnership;
use Illuminate\Http\Request;

class PartnershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partnerships = Partnership::all();

        return response(['partnersships' => $partnerships]);
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
            'school_id' => 'required|integer',
            'client_id' => 'required|integer',
            'partner_id' => 'required|integer',
        ]);

        $partnership = new Partnership;
        $partnership->school_id = $request->school_id;
        $partnership->client_id = $request->client_id;
        $partnership->partner_id = $request->partner_id;
        $partnership->save();

        return response(['partnership' => $partnership]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $partnership = Partnership::find($id);
        if($partnership){
            return response(['partnership' => $partnership]);
        }else{
            return response(['message' => 'Partnership not found'], 404);
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
        $partnership = Partnership::find($id);
        if($partnership){
            $partnership->name = $request->name;
            $partnership->logo = $request->logo;
            $partnership->status = $request->status;
            $partnership->save();
            return response(['partnership' => $partnership]);
        }else{
            return response(['message' => 'Partnership not found'], 404);
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
        $partnership = Partnership::find($id);

        if($partnership){
            $partnership->delete();
            return response(['partnership' => $partnership]);
        }else{
            return response(['message' => 'Partnership not found'], 404);
        }
    }
}
