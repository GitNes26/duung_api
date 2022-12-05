<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SubjetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjets')->insert([ 
            'subjet_name' => 'Español',
        ]);
        DB::table('subjets')->insert([ 
            'subjet_name' => 'Matematicas',
        ]);
    }
}
