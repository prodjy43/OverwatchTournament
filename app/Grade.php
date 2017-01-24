<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
     use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'grade',
    ];


    public function user(){
        return $this->hasMany('App\User');
    }
}
