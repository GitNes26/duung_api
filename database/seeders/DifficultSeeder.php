<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DifficultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('difficults')->insert([ 
            'difficult_name' => 'Bebe chillon',
            'difficult_score' => 1,
        ]);
        DB::table('difficults')->insert([ 
            'difficult_name' => 'Medias tintas',
            'difficult_score' => 5,
        ]);
        DB::table('difficults')->insert([ 
            'difficult_name' => 'Super Fortachon',
            'difficult_score' => 10,
        ]);
    }
}