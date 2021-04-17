<?php

namespace App\Http\Controllers;

use App\Models\AdminPartner;
use Illuminate\Http\Request;

class PartnerAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partnerAdmins = AdminPartner::all();

        return response(['partnerAdmins' => $partnerAdmins]);
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
            'partner_id' => 'required|integer',
            'user_id' => 'required|integer',
            'role_id' => 'required|integer'
        ]);

        $partnerAdmin = new AdminPartner;
        $partnerAdmin->partner_id = $request->partner_id;
        $partnerAdmin->user_id = $request->user_id;
        $partnerAdmin->role_id = $request->role_id;
        $partnerAdmin->save();

        return response(['partnerAdmin' => $partnerAdmin]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $partnerAdmin = AdminPartner::find($id);
        if($partnerAdmin){
            return response(['partnerAdmin' => $partnerAdmin]);
        }else{
            return response(['message' => 'AdminPartner not found'], 404);
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
            'partner_id' => 'required|integer',
            'user_id' => 'required|integer',
            'role_id' => 'required|integer'
        ]);

        $partnerAdmin = AdminPartner::find($id);
        if($partnerAdmin){
            $partnerAdmin->partner_id = $request->partner_id;
            $partnerAdmin->user_id = $request->user_id;
            $partnerAdmin->role_id = $request->role_id;
            $partnerAdmin->save();
            return response(['partnerAdmin' => $partnerAdmin]);
        }else{
            return response(['message' => 'AdminPartner not found'], 404);
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
        $partnerAdmin = AdminPartner::find($id);

        if($partnerAdmin){
            $partnerAdmin->delete();
            return response(['partnerAdmin' => $partnerAdmin]);
        }else{
            return response(['message' => 'AdminPartner not found'], 404);
        }
    }
}
