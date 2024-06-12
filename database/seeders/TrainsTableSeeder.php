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
        for ($i = 0; $i < 5; $i++) {
            $faker = Faker\Factory::create('it_IT');
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->departure_train = $faker->dateTimeBetween('now', '+1 month');
            $newTrain->departureStation = $faker->city();
            $newTrain->arrivalStation = $faker->city();
            $newTrain->departureTime = $faker->time();
            $newTrain->arrivalTime = $faker->time();
            $newTrain->trainNumber = $faker->numberBetween(1, 99);
            $newTrain->carriagesNumber = $faker->numberBetween(9, 20);
            $newTrain->inTime = $faker->boolean();
            $newTrain->cancelled = $faker->boolean();
            $newTrain->save();
        }
    }
}
