<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Techcomment extends Model
{
    protected $guarded = array();

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function techarticle(){
        return $this->belongsTo('App\Techarticle');
    }
}
