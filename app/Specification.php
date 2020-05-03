<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    /**
     * Get the cars for the specification.
     */    
    public function cars() {
        return $this->hasMany('App\Car');
    }    
    
    /**
     * Get the vehicle class that includes the specification.
     */
    public function vehicleClass()
    {
        return $this->belongsTo('App\VehicleClass');
    }    
}
