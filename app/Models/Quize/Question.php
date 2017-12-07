<?php

namespace App\Models\Quize;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'quize_questions';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(\App\Models\Quize\Category::class,'quize_category_id','id');
    }

    public function question()
    {
        return $this->belongsTo(\App\Models\Question::class,'question_id','id');
    }

    public function answers()
    {
        return $this->hasMany(Answer::class,'quize_question_id','id');
    }

}
