<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Tipo;

class TiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $registro = new Tipo();
        $registro->titulo = "Notícia";
        $registro->save();

        $registro = new Tipo();
        $registro->titulo = "Atividade";
        $registro->save();
    }
}
