<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Techarticle extends Model
{
    protected $guarded = array();

    public function techcomments (){
        return $this->hasMany('App\Techcomment');
    }
}
