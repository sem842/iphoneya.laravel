<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function devices()
    {
        return $this->hasMany('App\Device');
    }
}
