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
     */
    public function run(Faker $faker): void
    {
        
        $companyes = ['Trenitalia', 'Italo', 'Frecciarossa', 'OuiGo', 'SNCF'];

        for ($i = 0; $i < 100; $i++){

            
            $new_train = new Train();

            // $new_train->id();
            // $new_train->timestamps();
            $new_train->company = $faker->randomElement($companyes);
            $new_train->departure = $faker->city();
            $new_train->destination = $faker->city();
            $new_train->departure_time = $faker->dateTimeBetween('-1 day', '+1 week');
            $new_train->arrival_time = $faker->dateTimeInInterval($new_train->departure_time, '+1 day');
            $new_train->train_code = $faker->unique()->bothify('??-#######');
            $new_train->train_carriages = $faker->numberBetween(4, 12);
            $new_train->in_time = $faker->boolean();
            if ($new_train->in_time === true){
                $new_train->canceled = false;
            }
            else {
                $new_train->canceled = $faker->boolean();
            }
            

            $new_train->save();
        }
    }
}
