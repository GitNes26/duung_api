<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([ 
            'game_user_id' => 1,
            // 'game_subjet_id' => 1,
            // 'game_difficult_id' => 1,
            'game_round_id' => 1,
            'game_title' => 'Partida 1 de admin',
            // 'game_description' => 'partida de prueba',
            // 'game_score' => 0,
            // 'game_rate' => 0,
            'game_quantity_items_correct' => 0,
            // 'game_time_item' => ,
            // 'game_' => false,
        ]);
    }
}
