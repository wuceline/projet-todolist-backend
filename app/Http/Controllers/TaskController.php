<?php

namespace App\Http\Controllers;

use App\Models\Task;
use DB;

use App\Models\Tasl;

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
}
