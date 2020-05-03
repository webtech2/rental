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
        return $this->hasMany('App\Specification');
    }
}
