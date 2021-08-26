<?php

namespace App\Http\Controllers;

use App\Models\Task;
use DB;
use Illuminate\Http\Request;


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
        $categoryId = $request->input('categoryId');
        $completion = $request->input('completion');
        $status = $request->input('status');

        $newTask =[
        'title' => $title,
        'categoryId' => $categoryId,
        'completion' => $completion,
        'status' => $status,

        ];
        return response()->json($newTask);
    }
}
