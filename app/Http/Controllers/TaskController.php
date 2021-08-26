<?php

namespace App\Http\Controllers;

use App\Models\Task;
use DB;
use Illuminate\Http\Request;
use Laravel\Lumen\Http\ResponseFactory;


class TaskController extends Controller
{

    /**
     * HTTP Method : GET
     * URL : /tasks
     */
    public function list()
    {
        $tasksList = Task::all() ;

        return response()->json($tasksList);
    }

    public function create(Request $request)
    {
        $title = $request->input('title');
        $category_id = $request->input('category_id');
        $completion = $request->input('completion');
        $status = $request->input('status');

        $newTask = new Task;

        $newTask->title = $title;
        $newTask->category_id = $category_id;
        $newTask->completion = $completion;
        $newTask->status = $status;

        if($newTask->save()){
            return response()->json($newTask, 200);
        }else{
            return response()->json(['error' => 'Internal Server Error'], 500);
            };

    }
}
