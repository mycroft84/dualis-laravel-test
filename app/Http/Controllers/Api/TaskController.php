<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskApiStore;
use App\Http\Requests\TaskStore;
use App\Http\Resources\TaskCollection;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        return new TaskCollection(Task::all());
    }

    public function create(TaskApiStore $request)
    {
        $task = new Task();
        $task->text = $request->get('name');
        $task->done = 0;
        $task->save();

        return [
            'id'=>$task->getKey()
        ];
    }
}
