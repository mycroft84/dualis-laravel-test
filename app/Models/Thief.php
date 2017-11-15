<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thief extends Model
{
    protected $table = 'thieves';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function cars()
    {
        return $this->hasMany(Car::class,'thief_id','id');
    }
}
