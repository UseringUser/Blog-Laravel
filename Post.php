<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     public function comments()
    {
        return $this->hasMany('App\Comment');
    }
     protected $fillable = [
        'id_category', 'title','body',"path"
    ];
}
