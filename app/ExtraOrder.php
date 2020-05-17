<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExtraOrder extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'extra_orders';

    protected $fillable = ['order_id', 'extras_id'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function extras()
    {
        return $this->belongsTo(Extra::class);
    }
}
