<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $company = ['Trenitalia', 'Italo', 'Freccia Rossa', 'Freccia Bianca'];

        for ($i = 0; $i < 100; $i++) {
            $train = new Train();

            $departure_time = $faker->dateTimeBetween('-2 weeks', '+2 weeks');
            $arrival_time = $faker->dateTimeInInterval($departure_time, '+1 days');

            $train->company = $faker->randomElement($company);
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $departure_time;
            $train->arrival_time = $arrival_time;
            $train->carriages = $faker->numberBetween(1, 40);
            $train->train_code = $faker->bothify('??-###');
            $train->on_time = $faker->randomElement([0, 1]);
            $train->deleted = $faker->randomElement([0, 1]);

            $train->save();
        }
    }
}
