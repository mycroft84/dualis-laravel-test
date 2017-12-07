<?php

namespace App\Models\Quize;

use App\Models\Quize;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'quize_categories';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function quize()
    {
        return $this->belongsTo(Quize::class,'quize_id','id');
    }

    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class,'category_id','id');
    }

    public function questions()
    {
        return $this->hasMany(\App\Models\Quize\Question::class,'quize_category_id','id');
    }

}
