<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Importo il Modello del Treno
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Istanzio un nuovo modello di treno
        $new_train = new Train;

        $new_train->azienda = 'Italo';
        $new_train->stazione_partenza = 'Roma';
        $new_train->stazione_arrivo = 'Milano';
        $new_train->orario_partenza = '19:00:00';
        $new_train->orario_arrivo = '22:00:00';
        $new_train->codice_treno = 'PFR5YH2';
        $new_train->numero_carrozze = '6';
        $new_train->in_orario = '1';
        $new_train->cancellato = '0';

        $new_train->save();
    }
}
