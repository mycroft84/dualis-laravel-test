<?php

namespace App\Models\Exercise;

use App\Models\Exercise;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'exercise_tasks';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function exercise()
    {
        return $this->belongsTo(Exercise::class,'exercise_id','id');
    }
}
