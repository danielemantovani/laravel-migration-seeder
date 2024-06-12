<?php

namespace Database\Seeders;

use Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker\Factory::create('it_IT');
        for ($i = 0; $i < 20; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->randomElements(['a', 'b', 'c']);
            $newTrain->departureStation = $faker->city();
            $newTrain->arrivalStation = $faker->city();
            $newTrain->departureTime = $faker->time();
            $newTrain->arrivalTime = $faker->time();
            $newTrain->trainNumber = $faker->numberBetween(0, 99);
            $newTrain->carriagesNumber = $faker->numberBetween(0, 99);
            $newTrain->inTime = $faker->boolean();
            $newTrain->cencelled = $faker->boolean();
            $newTrain->save();
        }
    }
}
