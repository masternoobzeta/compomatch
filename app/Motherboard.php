<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motherboard extends Model
{

    protected $guarded = array();

    public function hardware(){
        return $this->hasMany('App\Hardware');
    }
}
