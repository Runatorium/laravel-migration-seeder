<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new train();

            $train->id = $i;
            $train->azienda = $faker->company();
            $train->stazione_di_partenza = $faker->city();
            $train->stazione_di_arrivo = $faker->city();
            $train->orario_di_partenza = $faker->dateTime();
            $train->orario_di_arrivo = $faker->dateTime();
            $train->codice_treno = $faker->bothify('????????????????');
            $train->numero_carrozze = $faker->randomDigitNotNull();
            $train->in_orario = $faker->numberBetween(0, 1);
            $train->save();
        }

    }
}