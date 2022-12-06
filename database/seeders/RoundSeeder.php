<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RoundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rounds')->insert([ 
            'round_name' => "ESPAÑOL - Bebe chillon",
            'round_subjet_id' => 1,
            'round_difficult_id' => 1,
            'round_quantity_items' => 3,
            'round_correct_min' => 1,
        ]);

        DB::table('rounds')->insert([ 
            'round_name' => "ESPAÑOL - Medias tintas",
            'round_subjet_id' => 1,
            'round_difficult_id' => 2,
            'round_quantity_items' => 5,
            'round_correct_min' => 2,
        ]);

        DB::table('rounds')->insert([ 
            'round_name' => "ESPAÑOL - Super Fortachon",
            'round_subjet_id' => 1,
            'round_difficult_id' => 3,
            'round_quantity_items' => 10,
            'round_correct_min' => 5,
        ]);
        
        DB::table('rounds')->insert([ 
            'round_name' => "MATEMATICAS - Bebe chillon",
            'round_subjet_id' => 1,
            'round_difficult_id' => 1,
            'round_quantity_items' => 3,
            'round_correct_min' => 1,
        ]);

        DB::table('rounds')->insert([ 
            'round_name' => "MATEMATICAS - Medias tintas",
            'round_subjet_id' => 1,
            'round_difficult_id' => 2,
            'round_quantity_items' => 5,
            'round_correct_min' => 2,
        ]);

        DB::table('rounds')->insert([ 
            'round_name' => "MATEMATICAS - Super Fortachon",
            'round_subjet_id' => 1,
            'round_difficult_id' => 3,
            'round_quantity_items' => 10,
            'round_correct_min' => 5,
        ]);
    }
}