<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['from', 'to', 'pickup_address', 'first_name', 'last_name', 'phone_number', 'user_id', 'car_id'];

    protected $casts = [
        'from' => 'date',
        'to' => 'date',
    ];

    protected $dates = ['from', 'to'];

    public function extraOrders()
    {
        return $this->hasMany(ExtraOrder::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pricePerDay()
    {
        return $this->car->price + $this->extraOrders()->sum('price_per_day');
    }

    public function totalPrice()
    {
        return (date_diff($this->to, $this->from)->days + 1) * $this->pricePerDay();
    }
}
