<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function questions()
    {
        return $this->hasMany(Question::class,'question_id','id');
    }

    public function quize_category()
    {
        return $this->hasMany(\App\Models\Quize\Category::class,'category_id','id');
    }
}
