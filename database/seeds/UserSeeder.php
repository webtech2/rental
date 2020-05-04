<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create(array('name' => 'Administrator',
                           'email' => 'admin@rental.test', 
                           'password' => bcrypt('secret'),
                           'role' => 1));
    }
}
