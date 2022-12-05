<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([ 
            'answer_item_id' => 1,
            'answer_text' => 'BAR',
            'answer_correct' => false,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 1,
            'answer_text' => 'BA',
            'answer_correct' => false,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 1,
            'answer_text' => 'CO',
            'answer_correct' => true,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 1,
            'answer_text' => 'A',
            'answer_correct' => false,
        ]);

        DB::table('answers')->insert([ 
            'answer_item_id' => 2,
            'answer_text' => 'CANCIÓN',
            'answer_correct' => true,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 2,
            'answer_text' => 'MOCHILA',
            'answer_correct' => false,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 2,
            'answer_text' => 'MENUDO',
            'answer_correct' => false,
        ]);

        DB::table('answers')->insert([ 
            'answer_item_id' => 3,
            'answer_text' => 'AVIÓN',
            'answer_correct' => false,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 3,
            'answer_text' => 'ESTRELLA',
            'answer_correct' => true,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 3,
            'answer_text' => 'FLOR',
            'answer_correct' => false,
        ]);
    }
}
