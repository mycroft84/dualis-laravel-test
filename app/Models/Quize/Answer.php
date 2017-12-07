<?php

namespace App\Models\Quize;

use App\Models\Answers;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'quize_answers';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function question()
    {
        return $this->belongsTo(Question::class,'quize_question_id','id');
    }

    public function answer()
    {
        return $this->belongsTo(Answers::class,'answer_id','id');
    }
}
