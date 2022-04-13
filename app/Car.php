<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function players()
    {
        return $this->belongsTo('App\Player');
    }
}
