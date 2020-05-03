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
        Car::create(array('id' => 1,'specification_id' => 1,'reg_number' => 'AB1234','mileage' => 28383,'color' => 'White','price' => '24.93','condition' => 'Good condition - Presentable inside and out with some signs of wear.'));
        Car::create(array('id' => 2,'specification_id' => 1,'reg_number' => 'BC2345','mileage' => 43726,'color' => 'Silver','price' => '23.83','condition' => 'Fair condition - Runs and drives OK but needs work throughout the vehicle.'));
        Car::create(array('id' => 3,'specification_id' => 2,'reg_number' => 'CD3456','mileage' => 12137,'color' => 'Black','price' => '26.27','condition' => 'Excellent condition - A close to perfect original or a very well restored vehicle.'));
        Car::create(array('id' => 4,'specification_id' => 2,'reg_number' => 'DE4567','mileage' => 40031,'color' => 'Grey','price' => '20.88','condition' => 'Very good condition - An extremely presentable vehicle showing minimal wear, or a well restored vehicle.'));
        Car::create(array('id' => 5,'specification_id' => 3,'reg_number' => 'EF5678','mileage' => 26522,'color' => 'Blue','price' => '33.8','condition' => 'Good condition - Presentable inside and out with some signs of wear.'));
        Car::create(array('id' => 6,'specification_id' => 3,'reg_number' => 'FG6789','mileage' => 37814,'color' => 'Red','price' => '36.22','condition' => 'Fair condition - Runs and drives OK but needs work throughout the vehicle.'));
        Car::create(array('id' => 7,'specification_id' => 4,'reg_number' => 'GH7890','mileage' => 39933,'color' => 'Brown','price' => '32.34','condition' => 'Excellent condition - A close to perfect original or a very well restored vehicle.'));
        Car::create(array('id' => 8,'specification_id' => 4,'reg_number' => 'HI8901','mileage' => 39788,'color' => 'Green','price' => '36.5','condition' => 'Very good condition - An extremely presentable vehicle showing minimal wear, or a well restored vehicle.'));
        Car::create(array('id' => 9,'specification_id' => 5,'reg_number' => 'IJ9012','mileage' => 48958,'color' => 'White','price' => '43.29','condition' => 'Good condition - Presentable inside and out with some signs of wear.'));
        Car::create(array('id' => 10,'specification_id' => 5,'reg_number' => 'JK1230','mileage' => 12742,'color' => 'Silver','price' => '45.89','condition' => 'Fair condition - Runs and drives OK but needs work throughout the vehicle.'));
        Car::create(array('id' => 11,'specification_id' => 6,'reg_number' => 'KL1234','mileage' => 33897,'color' => 'Black','price' => '43.34','condition' => 'Excellent condition - A close to perfect original or a very well restored vehicle.'));
        Car::create(array('id' => 12,'specification_id' => 6,'reg_number' => 'LM2345','mileage' => 20430,'color' => 'Grey','price' => '47.2','condition' => 'Very good condition - An extremely presentable vehicle showing minimal wear, or a well restored vehicle.'));
        Car::create(array('id' => 13,'specification_id' => 7,'reg_number' => 'MN3456','mileage' => 41143,'color' => 'Blue','price' => '56.36','condition' => 'Good condition - Presentable inside and out with some signs of wear.'));
        Car::create(array('id' => 14,'specification_id' => 7,'reg_number' => 'NO4567','mileage' => 19580,'color' => 'Red','price' => '56.87','condition' => 'Fair condition - Runs and drives OK but needs work throughout the vehicle.'));
        Car::create(array('id' => 15,'specification_id' => 8,'reg_number' => 'OP5678','mileage' => 17761,'color' => 'Brown','price' => '59.94','condition' => 'Excellent condition - A close to perfect original or a very well restored vehicle.'));
        Car::create(array('id' => 16,'specification_id' => 8,'reg_number' => 'PR6789','mileage' => 40936,'color' => 'Green','price' => '53.32','condition' => 'Very good condition - An extremely presentable vehicle showing minimal wear, or a well restored vehicle.'));
        Car::create(array('id' => 17,'specification_id' => 9,'reg_number' => 'RS7890','mileage' => 24372,'color' => 'White','price' => '61.81','condition' => 'Good condition - Presentable inside and out with some signs of wear.'));
        Car::create(array('id' => 18,'specification_id' => 9,'reg_number' => 'ST8901','mileage' => 42471,'color' => 'Silver','price' => '69.94','condition' => 'Fair condition - Runs and drives OK but needs work throughout the vehicle.'));
        Car::create(array('id' => 19,'specification_id' => 10,'reg_number' => 'TU9012','mileage' => 17645,'color' => 'Black','price' => '61.7','condition' => 'Excellent condition - A close to perfect original or a very well restored vehicle.'));
        Car::create(array('id' => 20,'specification_id' => 10,'reg_number' => 'UA1230','mileage' => 11571,'color' => 'Grey','price' => '65.8','condition' => 'Very good condition - An extremely presentable vehicle showing minimal wear, or a well restored vehicle.'));
    }
}
