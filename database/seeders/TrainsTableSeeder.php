<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 2; $i++) {

            $freccia_rossa = new Train();
            $freccia_rossa->Azienda = "trenitalia";
            $freccia_rossa->Stazione_di_partenza = "Torino Porta Nuova";
            $freccia_rossa->Stazione_di_arrivo = "Roma Termini";
            $freccia_rossa->Orario_di_partenza = 19.00;
            $freccia_rossa->Orario_di_arrivo = 23.49;
            $freccia_rossa->Codice_Treno = 9567;
            $freccia_rossa->Numero_carrozze = 8;
            $freccia_rossa->save();
        }
    }
}
