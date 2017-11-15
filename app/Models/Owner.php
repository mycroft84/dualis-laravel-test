<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $table = 'owners';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $guarded = [];

    public function car()
    {
        return $this->hasOne(Car::class,'owner_id','id');
    }
}
