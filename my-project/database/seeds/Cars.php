<?php

use Illuminate\Database\Seeder;
use App\car;
class Cars extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = (new \Faker\Factory())::create();
        $faker->addProvider(new \Faker\Provider\Fakecar($faker));
        
        for($i=0; $i < 10; $i++)
        {
            $car = new car;
            $car->name = $faker->vehicle;
            $car->body_style = $faker->vehicleType;
            $car->fuel_style = $faker->vehicleFuelType;
            $car->year = $faker->biasedNumberBetween(1998,2017, 'sqrt');
            $car->transmission = $faker->vehicleGearBoxType;
            $car->save();
        }
    }
}
