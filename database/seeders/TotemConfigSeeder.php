<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TotemConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('totem_configs')->insert([
                [
                    'nome_totem' => 'Ser Responsável',
                    'altura_index' => 250,
                    'largura_index' => 450,
                    'altura_detail' => 500,
                    'largura_detail' => 700,
                ]
            ]
        );
    }
}
