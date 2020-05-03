<?php

use App\VehicleClass;
use Illuminate\Database\Seeder;

class VehicleClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VehicleClass::truncate();
        VehicleClass::create(array('id' => 1, 'name' => 'Compact'));
        VehicleClass::create(array('id' => 2, 'name' => 'Mid-size'));
        VehicleClass::create(array('id' => 3, 'name' => 'Full-size'));
        VehicleClass::create(array('id' => 4, 'name' => 'Minivan'));
        VehicleClass::create(array('id' => 5, 'name' => 'SUV'));
    }
}
