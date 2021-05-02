<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Task;
use App\Models\Student;
use App\Models\StudentTask;
use SebastianBergmann\Environment\Console;

class TaskController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id)->with('files')->first();
        if ($task) {
            return response(['task' => $task]);
        } else {
            return response(['message' => 'Task not found'], 404);
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

    /**
     * Upload file to a task
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function uploadFile(Request $request)
    {


        $student_task = StudentTask::where('student_id', '=', $request->student_id)->where('task_id', '=', $request->task_id)->first();

        if ($student_task) {

            if ($request->hasFile('files')) {
                $files =  $request->file('files');

                foreach ($files as $file) {
                    $path = Storage::putFile('public/files', $file);
                    $url = Storage::url($path);

                    $newfile = new File;
                    $newfile->path = $url;
                    $newfile->student_task_id = $student_task->id;
                    $newfile->save();
                }



                return response(['message' => 'ok']);
            } else {
                return response(["message" => "No files in request"]);
            }
        } else {
            $student = Student::find($request->student_id);
            $student->tasks()->attach($request->task_id);
            $student->save();

            $temp_student_task = StudentTask::where('student_id', '=', $request->student_id)->where('task_id', '=', $request->task_id)->first();
            if ($temp_student_task) {
                if ($request->hasFile('files')) {
                    $files =  $request->file('files');
                    foreach ($files as $file) {
                        $path = Storage::putFile('public/files', $file);
                        $url = Storage::url($path);

                        $file = new File;
                        $file->path = $url;
                        $file->student_task_id = $student_task->id;
                        $file->save();
                    }
                    return response(['message' => 'ok']);
                }
                else {
                    return response(["message" => "No files in request"]);
                }
            } else {
                return response(['message' => 'cannot process'], 402);
            }
        }
    }

    /**
     * @param  int  $task_id
     * @param  int  $student_id
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getFiles($task_id, $student_id)
    {

        // $data = $request->validate([
        //     'student_id' => 'required|integer',
        //     'task_id' => 'required|integer',
        // ]);

        // $student = Student::find($student_id);
        // $task = Task::find($task_id);

        $student_task = StudentTask::where('student_id', '=', $student_id)->where('task_id', '=', $task_id)->first();


        if ($student_task) {
            $files = File::where('student_task_id', '=', $student_task->id)->get();
            return response(['files' => $files, "message" => 'yes', "id" => $student_task->id]);
        } else {
            $student = Student::find($student_id);
            $student->tasks()->attach($task_id);
            $student->save();
            return response(['files' => [], "message" => 'nope']);
        }
    }
}
