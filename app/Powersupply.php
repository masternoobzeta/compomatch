<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Powersupply extends Model
{

    protected $guarded = array();

    public function hardware(){
        return $this->hasMany('App\Hardware');
    }
}