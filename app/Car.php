<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    /**
     * Get the specification that this car corresponds to.
     */
    public function specification()
    {
        return $this->belongsTo('App\Specification');
    }  
}
