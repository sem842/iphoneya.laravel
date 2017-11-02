<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public function service()
    {
        return $this->hasMany('App\Service');
    }
}
