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
            'answer_item_id' => 4,
            'answer_text' => '90036',
            'answer_correct' => false,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 4,
            'answer_text' => '936',
            'answer_correct' => false,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 4,
            'answer_text' => '9036',
            'answer_correct' => true,
        ]);
 
        DB::table('answers')->insert([ 
            'answer_item_id' => 5,
            'answer_text' => '100000 unidades',
            'answer_correct' => true,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 5,
            'answer_text' => '10000 unidades',
            'answer_correct' => false,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 5,
            'answer_text' => '1000 unidades',
            'answer_correct' => false,
        ]);

        DB::table('answers')->insert([ 
            'answer_item_id' => 6,
            'answer_text' => '50',
            'answer_correct' => false,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 6,
            'answer_text' => '60',
            'answer_correct' => true,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 6,
            'answer_text' => '55',
            'answer_correct' => false,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 7,
            'answer_text' => '135',
            'answer_correct' => false,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 7,
            'answer_text' => '35',
            'answer_correct' => true,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 7,
            'answer_text' => '25',
            'answer_correct' => false,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 8,
            'answer_text' => 'diez',
            'answer_correct' => false,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 8,
            'answer_text' => 'uno',
            'answer_correct' => false,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 8,
            'answer_text' => 'cinco',
            'answer_correct' => true,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 9,
            'answer_text' => '8',
            'answer_correct' => true,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 9,
            'answer_text' => '9',
            'answer_correct' => false,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 9,
            'answer_text' => '7',
            'answer_correct' => false,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 10,
            'answer_text' => '1001',
            'answer_correct' => false,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 10,
            'answer_text' => '990',
            'answer_correct' => false,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 10,
            'answer_text' => '999',
            'answer_correct' => true,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 11,
            'answer_text' => '2',
            'answer_correct' => true,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 11,
            'answer_text' => '-2',
            'answer_correct' => false,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 11,
            'answer_text' => '1',
            'answer_correct' => false,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 11,
            'answer_text' => '-1',
            'answer_correct' => false,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 12,
            'answer_text' => '315°',
            'answer_correct' => false,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 12,
            'answer_text' => '145° 30’',
            'answer_correct' => false,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 12,
            'answer_text' => '270°',
            'answer_correct' => false,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 12,
            'answer_text' => '157° 30’',
            'answer_correct' => true,
        ]);
         DB::table('answers')->insert([ 
            'answer_item_id' => 13,
            'answer_text' => 'CANCIÓN',
            'answer_correct' => false,
        ]);
         DB::table('answers')->insert([ 
            'answer_item_id' => 13,
            'answer_text' => '157° 30’',
            'answer_correct' => false,
        ]);
         DB::table('answers')->insert([ 
            'answer_item_id' => 13,
            'answer_text' => 'CANCIÓN',
            'answer_correct' => true,
        ]);
         DB::table('answers')->insert([ 
            'answer_item_id' => 14,
            'answer_text' => 'CANCIÓN',
            'answer_correct' => false,
        ]);
         DB::table('answers')->insert([ 
            'answer_item_id' => 14,
            'answer_text' => '157° 30’',
            'answer_correct' => false,
        ]);
         DB::table('answers')->insert([ 
            'answer_item_id' => 14,
            'answer_text' => 'CANCIÓN',
            'answer_correct' => true,
        ]);
         DB::table('answers')->insert([ 
            'answer_item_id' => 14,
            'answer_text' => '157° 30’',
            'answer_correct' => false,
        ]);
         DB::table('answers')->insert([ 
            'answer_item_id' => 15,
            'answer_text' => '157° 30’',
            'answer_correct' => false,
        ]);
         DB::table('answers')->insert([ 
            'answer_item_id' => 15,
            'answer_text' => 'CANCIÓN',
            'answer_correct' => false,
        ]);
         DB::table('answers')->insert([ 
            'answer_item_id' => 15,
            'answer_text' => '157° 30’',
            'answer_correct' => true,
        ]);
         DB::table('answers')->insert([ 
            'answer_item_id' => 16,
            'answer_text' => 'CANCIÓN',
            'answer_correct' => true,
        ]);
         DB::table('answers')->insert([ 
            'answer_item_id' => 16,
            'answer_text' => '157° 30’',
            'answer_correct' => false,
        ]);
         DB::table('answers')->insert([ 
            'answer_item_id' => 16,
            'answer_text' => 'CANCIÓN',
            'answer_correct' => false,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 17,
            'answer_text' => 'sorbo',
            'answer_correct' => true,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 17,
            'answer_text' => 'marruecos',
            'answer_correct' => false,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 18,
            'answer_text' => 'soto',
            'answer_correct' => false,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 18,
            'answer_text' => 'valles',
            'answer_correct' => true,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 18,
            'answer_text' => 'norberto',
            'answer_correct' => false,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 19,
            'answer_text' => 'mauricio',
            'answer_correct' => true,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 19,
            'answer_text' => 'josé',
            'answer_correct' => false,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 19,
            'answer_text' => 'lopez',
            'answer_correct' => false,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 20,
            'answer_text' => '1',
            'answer_correct' => true,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 20,
            'answer_text' => '2',
            'answer_correct' => false,
        ]);
        DB::table('answers')->insert([ 
            'answer_item_id' => 20,
            'answer_text' => '3',
            'answer_correct' => false,
        ]);
    }
}
