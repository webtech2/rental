<?php

use App\Extra;
use Illuminate\Database\Seeder;

class ExtraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Extra::truncate();
        Extra::create(array('id' => 1, 'name' => 'Unlimited mileage', 'price_per_day' => 9.99));
        Extra::create(array('id' => 2, 'name' => 'Full insurance', 'price_per_day' => 10.99));
        Extra::create(array('id' => 3, 'name' => 'Child seat', 'price_per_day' => 5));
        Extra::create(array('id' => 4, 'name' => 'GPS navigation', 'price_per_day' => 4.99));
        Extra::create(array('id' => 5, 'name' => 'Roof rack', 'price_per_day' => 5.99));
        Extra::create(array('id' => 6, 'name' => 'Car video recorder', 'price_per_day' => 3));

    }
}
