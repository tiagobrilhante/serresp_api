<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoEventosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('tipo_eventos')->insert([
                [
                    'id' => 1,
                    'tipo' => 'Tipo 1',
                ],
                [
                    'id' => 2,
                    'tipo' => 'Tipo 2',
                ],
                [
                    'id' => 3,
                    'tipo' => 'Tipo 3',
                ],

            ]
        );
    }
}
