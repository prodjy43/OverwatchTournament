<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public $fillable = ['title','content','slug','user_id'];

    public function tags(){
        return $this->belongsToMany('App\Tag');
    }

    public function users(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
