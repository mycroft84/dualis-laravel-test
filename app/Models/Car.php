<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'cars';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function owner()
    {
        return $this->belongsTo(Owner::class,'id','id');
    }
}
