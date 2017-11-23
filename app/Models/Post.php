<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $dates = [
        'publish_date'
    ];
    protected $dateFormat = 'U';

    public function comments()
    {
        return $this->hasMany(Comment::class,'post_id','id');
    }
}
