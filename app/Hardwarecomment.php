<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hardwarecomment extends Model
{
    protected $guarded = array();

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function hardware(){
        return $this->belongsTo('App\Hardware');
    }
}
