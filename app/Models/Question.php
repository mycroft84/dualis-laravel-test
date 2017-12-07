<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function answers()
    {
        return $this->hasMany(Answers::class,'question_id','id');
    }

    public function quize_questions()
    {
        return $this->hasMany(\App\Models\Quize\Question::class,'question_id','id');
    }
}
