<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Material;

use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'week' => 'required|integer',
            'task_id' => 'required|integer',
            'file' => 'required|file',
        ]);



        $file =  $request->file('file');
        $week = $request->week;
        $task_id = $request->task_id;

        $path = Storage::putFileAs('public/files/week' . $week, $file,$file->getClientOriginalName());
        $url = Storage::url($path);

        $newMaterial = new Material;
        $newMaterial->path = $url;
        $newMaterial->filename = $file->getClientOriginalName();
        $newMaterial->filetype = $file->getClientOriginalExtension();
        $newMaterial->task_id = $task_id;
        $newMaterial->save();

        return response(['material' => $newMaterial]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
