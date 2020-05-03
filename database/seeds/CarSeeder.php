<?php

use App\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::truncate();
        Car::create(array('id' => 1,'specification_id' => 1,'reg_number' => 'AB1234','mileage' => 24498,'color' => '  White','price' => '29.75','condition' => 'Good condition - Presentable inside and out with some signs of wear.'));
        Car::create(array('id' => 2,'specification_id' => 1,'reg_number' => 'BC2345','mileage' => 45970,'color' => '  Silver','price' => '27.8','condition' => 'Fair condition - Runs and drives OK but needs work throughout the vehicle.'));
        Car::create(array('id' => 3,'specification_id' => 2,'reg_number' => 'CD3456','mileage' => 21148,'color' => '  Black','price' => '26.38','condition' => 'Excellent condition - A close to perfect original or a very well restored vehicle.'));
        Car::create(array('id' => 4,'specification_id' => 2,'reg_number' => 'DE4567','mileage' => 44386,'color' => '  Grey','price' => '26.42','condition' => 'Very good condition - An extremely presentable vehicle showing minimal wear, or a well restored vehicle.'));
        Car::create(array('id' => 5,'specification_id' => 3,'reg_number' => 'EF5678','mileage' => 21792,'color' => '  Blue','price' => '38.39','condition' => 'Good condition - Presentable inside and out with some signs of wear.'));
        Car::create(array('id' => 6,'specification_id' => 3,'reg_number' => 'FG6789','mileage' => 35721,'color' => '  Red','price' => '33.57','condition' => 'Fair condition - Runs and drives OK but needs work throughout the vehicle.'));
        Car::create(array('id' => 7,'specification_id' => 4,'reg_number' => 'GH7890','mileage' => 6177,'color' => '  Brown','price' => '34.2','condition' => 'Excellent condition - A close to perfect original or a very well restored vehicle.'));
        Car::create(array('id' => 8,'specification_id' => 4,'reg_number' => 'HI8901','mileage' => 21356,'color' => '  Green','price' => '39.17','condition' => 'Very good condition - An extremely presentable vehicle showing minimal wear, or a well restored vehicle.'));
        Car::create(array('id' => 9,'specification_id' => 5,'reg_number' => 'IJ9012','mileage' => 26343,'color' => '  White','price' => '45.13','condition' => 'Good condition - Presentable inside and out with some signs of wear.'));
        Car::create(array('id' => 10,'specification_id' => 5,'reg_number' => 'JK1230','mileage' => 39630,'color' => '  Silver','price' => '40.02','condition' => 'Fair condition - Runs and drives OK but needs work throughout the vehicle.'));
        Car::create(array('id' => 11,'specification_id' => 6,'reg_number' => 'KL1234','mileage' => 12291,'color' => '  Black','price' => '48.44','condition' => 'Excellent condition - A close to perfect original or a very well restored vehicle.'));
        Car::create(array('id' => 12,'specification_id' => 6,'reg_number' => 'LM2345','mileage' => 42625,'color' => '  Grey','price' => '41.46','condition' => 'Very good condition - An extremely presentable vehicle showing minimal wear, or a well restored vehicle.'));
        Car::create(array('id' => 13,'specification_id' => 7,'reg_number' => 'MN3456','mileage' => 34034,'color' => '  Blue','price' => '50.67','condition' => 'Good condition - Presentable inside and out with some signs of wear.'));
        Car::create(array('id' => 14,'specification_id' => 7,'reg_number' => 'NO4567','mileage' => 12290,'color' => '  Red','price' => '51.6','condition' => 'Fair condition - Runs and drives OK but needs work throughout the vehicle.'));
        Car::create(array('id' => 15,'specification_id' => 8,'reg_number' => 'OP5678','mileage' => 19911,'color' => '  Brown','price' => '50.5','condition' => 'Excellent condition - A close to perfect original or a very well restored vehicle.'));
        Car::create(array('id' => 16,'specification_id' => 8,'reg_number' => 'PR6789','mileage' => 39458,'color' => '  Green','price' => '57.75','condition' => 'Very good condition - An extremely presentable vehicle showing minimal wear, or a well restored vehicle.'));
        Car::create(array('id' => 17,'specification_id' => 9,'reg_number' => 'RS7890','mileage' => 21143,'color' => '  White','price' => '69.68','condition' => 'Good condition - Presentable inside and out with some signs of wear.'));
        Car::create(array('id' => 18,'specification_id' => 9,'reg_number' => 'ST8901','mileage' => 15912,'color' => '  Silver','price' => '66.68','condition' => 'Fair condition - Runs and drives OK but needs work throughout the vehicle.'));
        Car::create(array('id' => 19,'specification_id' => 10,'reg_number' => 'TU9012','mileage' => 38267,'color' => '  Black','price' => '66.67','condition' => 'Excellent condition - A close to perfect original or a very well restored vehicle.'));
        Car::create(array('id' => 20,'specification_id' => 10,'reg_number' => 'UA1230','mileage' => 26072,'color' => '  Grey','price' => '65.92','condition' => 'Very good condition - An extremely presentable vehicle showing minimal wear, or a well restored vehicle.'));
    }
}
