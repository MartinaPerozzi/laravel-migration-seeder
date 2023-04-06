<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Importo il Modello del Treno
use App\Models\Train;
// Importare il faker
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
        // Istanzio un nuovo modello di treno
        for ($i = 0; $i < 30; $i++) {
            $new_train = new Train;

            $new_train->azienda = $faker->randomElement(["Trenitalia", "Italo", "Trenord SpA", "FerrovieNord"]);
            $new_train->stazione_partenza = $faker->city();
            $new_train->stazione_arrivo = $faker->city();
            $new_train->orario_partenza = $faker->time();
            $new_train->orario_arrivo = $faker->time();
            $new_train->codice_treno = $faker->randomNumber(6, true);
            $new_train->numero_carrozze = $faker->randomDigitNotNull();
            $new_train->in_orario = $faker->boolean();
            $new_train->cancellato = $faker->boolean();

            $new_train->save();
        };
    }
}
