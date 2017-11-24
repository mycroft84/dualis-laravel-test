<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskStore;
use App\Models\Task;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $tasks = Task::orderBy('done','asc')->orderBy('text')->get();

        return view('Todo.index',[
            'tasks'=>$tasks
        ]);
    }

    public function store(TaskStore $request)
    {
        $task = new Task();
        $task->text = $request->get('task');
        $task->done = 0;
        $task->save();

        return redirect(route('todoList'));
    }

    public function delete(Car $car)
    {
        $car->delete();

        return ['error'=>false];
    }
}
