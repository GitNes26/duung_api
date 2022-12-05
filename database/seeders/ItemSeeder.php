<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([ 
            'item_game_id' => 1,
            'item_tq_id' => 1,
            'item_question' => '¿Cuál es la sílaba tónica en esta palabra?
            BARBACOA',
            'item_time' => 15,
        ]);

        DB::table('items')->insert([ 
            'item_game_id' => 1,
            'item_tq_id' => 1,
            'item_question' => '¿Cuál de las siguientes palabras es aguda?',
            'item_time' => 10,
        ]);

        DB::table('items')->insert([ 
            'item_game_id' => 1,
            'item_tq_id' => 1,
            'item_question' => '¿Cuál de las siguientes palabras es grave?',
            'item_time' => 10,
        ]);
    }
}