<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        $this->call(UserSeeder::class);
        $this->call(VehicleClassSeeder::class);
        $this->call(SpecificationSeeder::class);
        $this->call(CarSeeder::class);
        Schema::enableForeignKeyConstraints();
    }
}
