<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExercisesRequest;
use App\Models\Exercise;
use Illuminate\Http\Request;

class ExercisesController extends Controller
{
    public function index()
    {
        return view('Exercises.index');
    }

    public function task(ExercisesRequest $request)
    {
        return view('Exercises.task',[
            'name'=>$request->get('name'),
            'tasks'=>$this->getRandomTasks($request->get('task_number'))
        ]);
    }

    public function store(Request $request)
    {
        $exercise = (new Exercise())->addHeader($request->get('name'),count($request->get('result')));

        $result = $exercise->addTasks(
            $request->get('number_1'),
            $request->get('number_2'),
            $request->get('result')
        );

        $exercise->setResult($result);

        return redirect(route('exercisesDetails',['exercise'=>$exercise->getKey()]));
    }

    public function details(Exercise $exercise)
    {
        return view('Exercises.details',[
            'exercise'=>$exercise,
        ]);
    }

    protected function getRandomTasks($number)
    {
        $result = [];
        for($i=0;$i<$number;$i++) {
            $temp = [
                'number_1'=>rand(0,100),
                'number_2'=>rand(0,100),
            ];

            $result[] = $temp;
        }

        return $result;
    }
}
