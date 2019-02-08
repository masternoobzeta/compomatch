<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $guarded = array();

    public function comments (){
        return $this->hasMany('App\Comment');
    }

    public function user (){
        return $this->belongsTo('App\User');
    }


}
