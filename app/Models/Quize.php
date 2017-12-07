<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quize extends Model
{
    protected $table = 'quize';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function categories()
    {
        return $this->hasMany(\App\Models\Quize\Category::class,'quize_id','id');
    }

}
