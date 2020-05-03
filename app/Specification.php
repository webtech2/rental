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
        return $this->belongsTo('App\VehicleClass', 'class_id');
        // the foreign key column added as a second parameter since 
        // the foreign key column name in the table specifications 
        // is class_id and not the default one vehicle_class_id
    }    
}
