<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleClass extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'classes';

    /**
     * Get the specifications for the vehicle class.
     */    
    public function specifications() {
        return $this->hasMany('App\Specification', 'class_id'); 
        // the foreign key column added as a second parameter since 
        // the foreign key column name in the table specifications 
        // is class_id and not the default one vehicle_class_id
    }
}
