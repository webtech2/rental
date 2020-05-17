<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    public function extraOrders()
    {
        return $this->hasMany(ExtraOrder::class);
    }
}
