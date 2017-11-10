<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function devices()
    {
        return $this->hasMany('App\Device');
    }

    public static function countOfServices()
    {
        return count(Service::all());
    }

    /*public static function countOfPrices()
    {
        return count(Service::all());
    }*/
}
