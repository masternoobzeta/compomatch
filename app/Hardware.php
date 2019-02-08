<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hardware extends Model
{

    protected $guarded = array();

    protected $table = 'hardwares';

    public function cpu()
    {
        return $this->belongsToMany('App\Cpu');
    }

    public function harddrive()
    {
        return $this->belongsToMany('App\Harddrive');
    }

    public function memory()
    {
        return $this->belongsToMany('App\Memory');
    }

    public function motherboard()
    {
        return $this->belongsTo('App\Motherboard');
    }

    public function powersupply()
    {
        return $this->belongsTo('App\Powersupply');
    }

    public function tower()
    {
        return $this->belongsTo('App\Tower');
    }

    public function videocard()
    {
        return $this->belongsToMany('App\Videocard');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function hardwarecomments()
    {
        return $this->hasMany('App\HardwareComment');
    }
}