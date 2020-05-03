<?php

use App\Specification;
use Illuminate\Database\Seeder;

class SpecificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Specification::truncate();
        Specification::create(array('id' => 1,'class_id' => 1,'make' => 'Fiat','model' => '500','year' => 2018,'automatic' => 0));
        Specification::create(array('id' => 2,'class_id' => 1,'make' => 'Honda','model' => 'Civic','year' => 2019,'automatic' => 1));
        Specification::create(array('id' => 3,'class_id' => 2,'make' => 'VW','model' => 'Passat','year' => 2017,'automatic' => 0));
        Specification::create(array('id' => 4,'class_id' => 2,'make' => 'Audi','model' => 'A4','year' => 2020,'automatic' => 1));
        Specification::create(array('id' => 5,'class_id' => 3,'make' => 'BMW','model' => '5','year' => 2016,'automatic' => 0));
        Specification::create(array('id' => 6,'class_id' => 3,'make' => 'Volvo','model' => 'V90','year' => 2018,'automatic' => 1));
        Specification::create(array('id' => 7,'class_id' => 4,'make' => 'VW','model' => 'Sharan','year' => 2019,'automatic' => 0));
        Specification::create(array('id' => 8,'class_id' => 4,'make' => 'Ford','model' => 'Galaxy','year' => 2020,'automatic' => 1));
        Specification::create(array('id' => 9,'class_id' => 5,'make' => 'Nissan','model' => 'Qashqai','year' => 2017,'automatic' => 0));
        Specification::create(array('id' => 10,'class_id' => 5,'make' => 'Toyota ','model' => 'Land Cruiser','year' => 2019,'automatic' => 1));
    }
}
