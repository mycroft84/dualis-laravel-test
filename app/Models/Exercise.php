<?php

namespace App\Models;

use App\Models\Exercise\Task;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Exercise extends Model
{
    protected $table = 'exercises';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function tasks()
    {
        return $this->hasMany(Task::class,'exercise_id','id');
    }

    public function addHeader($name,$task_number)
    {
        $exercise = new Exercise();
        $exercise->name = $name;
        $exercise->task_number = $task_number;
        $exercise->save();

        return $exercise;
    }

    public function addTasks(array $number_1, array $number_2, array $result)
    {
        $good = 0;

        foreach ($number_1 as $index=>$item) {
            $task = new Task();
            $task->exercise_id = $this->getKey();
            $task->number_1 = $item;
            $task->number_2 = $number_2[$index];
            $task->real_result = $this->calcRealResult($task->number_1,$task->number_2);
            $task->user_result = $result[$index];
            $task->is_right = (int) $this->isRight($task->real_result,$task->user_result);
            $task->save();

            if ($task->is_right) $good++;
        }

        return $good;
    }

    public function setResult($good_num)
    {
        $this->good_number = $good_num;
        $this->bad_number = $this->task_number - $good_num;
        $this->save();
    }

    protected function calcRealResult($a, $b)
    {
        return $a + $b;
    }

    protected function isRight($a, $b)
    {
        return $a == $b;
    }
}
