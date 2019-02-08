<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memory extends Model
{

    protected $guarded = array();

    public function hardware(){
        return $this->belongsToMany('App\Hardware');
    }
}
