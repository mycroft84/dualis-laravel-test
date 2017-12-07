<?php

namespace App\Models;

use App\Models\Quize\Answer;
use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    protected $table = 'answers';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function question()
    {
        return $this->belongsTo(Question::class,'question_id','id');
    }

    public function quize_answers()
    {
        return $this->hasMany(Answer::class,'answer_id','id');
    }
}
