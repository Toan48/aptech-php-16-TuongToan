<?php

use Illuminate\Database\Seeder;
use App\category;
class categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \MattWells\Faker\Vehicle\Provider($faker));
        for($i=0; $i < 10; $i++)
        {
            $catgories = new category;
            $catgories->name = $faker->vehicleMake;
            $catgories->save();
        }
    }
}
