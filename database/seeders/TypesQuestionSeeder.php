<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TypesQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types_question')->insert([ 
            'tq_name' => 'Opcion multiple (textos)',
        ]);
        DB::table('types_question')->insert([ 
            'tq_name' => 'Opcion multiple (imagenes)',
        ]);
    }
}
