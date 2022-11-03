<?php

use Illuminate\Database\Seeder;

use App\models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->azienda = $faker->name();
            $train->stazione_partenza = $faker->city();
            $train->stazione_arrivo = $faker->city();
            $train->orario_partenza = $faker->time();
            $train->orario_arrivo = $faker->time();
            $train->codice_treno = $faker->isbn10();
            $train->numero_carrozze = $faker->numberBetween(3, 12);
            $train->puntuale = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->save();
        }
    }
}
