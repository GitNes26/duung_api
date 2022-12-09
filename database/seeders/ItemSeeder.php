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
            'item_round_id' => 1,
            'item_tq_id' => 1,
            'item_question' => '¿Cuál es la sílaba tónica en esta palabra?
            BARBACOA',
            'item_time' => 15,
        ]);

        DB::table('items')->insert([ 
            'item_round_id' => 1,
            'item_tq_id' => 1,
            'item_question' => '¿Cuál de las siguientes palabras es aguda?',
            'item_time' => 10,
        ]);

        DB::table('items')->insert([ 
            'item_round_id' => 1,
            'item_tq_id' => 1,
            'item_question' => '¿Cuál de las siguientes palabras es grave?',
            'item_time' => 10,
        ]);
        DB::table('items')->insert([ 
            'item_round_id' => 4,
            'item_tq_id' => 1,
            'item_question' => '¿Cuál es la representación gráfica del número nueve mil treinta y seis?',
            'item_time' => 10,
        ]);
        DB::table('items')->insert([ 
            'item_round_id' => 4,
            'item_tq_id' => 1,
            'item_question' => '¿A cuántas unidades equivale 10 decenas de millar?',
            'item_time' => 10,
        ]);
        DB::table('items')->insert([ 
            'item_round_id' => 4,
            'item_tq_id' => 1,
            'item_question' => 'Aproxima el número 58 a la decena',
            'item_time' => 10,
        ]);
        DB::table('items')->insert([ 
            'item_round_id' => 4,
            'item_tq_id' => 1,
            'item_question' => 'Número ordinal trigésimo quinto en cifras.',
            'item_time' => 10,
        ]);
        DB::table('items')->insert([ 
            'item_round_id' => 4,
            'item_tq_id' => 1,
            'item_question' => '¿Qué cantidad expresa el número romano V?',
            'item_time' => 10,
        ]);
        DB::table('items')->insert([ 
            'item_round_id' => 4,
            'item_tq_id' => 1,
            'item_question' => '¿Qué número resulta si divides 56 entre 7?',
            'item_time' => 10,
        ]);
        DB::table('items')->insert([ 
            'item_round_id' => 4,
            'item_tq_id' => 1,
            'item_question' => '¿Cuál es el número anterior a 1000?',
            'item_time' => 10,
        ]);
        DB::table('items')->insert([ 
            'item_round_id' => 5,
            'item_tq_id' => 1,
            'item_question' => 'Encuentra el valor de x en la siguiente ecuación:  2(1+2x)=10',
            'item_time' => 10,
        ]);
        DB::table('items')->insert([ 
            'item_round_id' => 5,
            'item_tq_id' => 1,
            'item_question' => 'Si 2π radianes equivalen a 360°, ¿cuánto equivale un ángulo de 7π/8 radianes?',
            'item_time' => 10,
        ]);
        DB::table('items')->insert([ 
            'item_round_id' => 5,
            'item_tq_id' => 1,
            'item_question' => 'Dada una colección de valores, el número que se repite más veces se conoce como:',
            'item_time' => 10,
        ]);
        DB::table('items')->insert([ 
            'item_round_id' => 5,
            'item_tq_id' => 1,
            'item_question' => 'Encuentra el valor de las incógnitas en el siguiente sistema de ecuaciones: [2x+5y=17]
            [3x+4y=15]',
            'item_time' => 10,
        ]);
        DB::table('items')->insert([ 
            'item_round_id' => 5,
            'item_tq_id' => 1,
            'item_question' => 'Identifica la representación matemática de la ley de los cosenos para un triángulo ABC:',
            'item_time' => 10,
        ]);
        DB::table('items')->insert([ 
            'item_round_id' => 5,
            'item_tq_id' => 1,
            'item_question' => '¿Cuál es la factorización del siguiente trinomio?', 'item_time' => 10,
        ]);

        DB::table('items')->insert([ 
            'item_round_id' => 2,
            'item_tq_id' => 1,
            'item_question' => 'Tipo de texto en el que existe una introducción, desarrollo de un tema y cierre', 'item_time' => 10,
        ]);
        DB::table('items')->insert([ 
            'item_round_id' => 2,
            'item_tq_id' => 1,
            'item_question' => 'Estas palabras engloban todas las acciones que realizamos o suceden:', 'item_time' => 10,
        ]);
        DB::table('items')->insert([ 
            'item_round_id' => 2,
            'item_tq_id' => 1,
            'item_question' => 'Son las terminaciones de los verbos conjugados en copretérito:',
            'item_time' => 10,
        ]);
        DB::table('items')->insert([ 
            'item_round_id' => 3,
            'item_tq_id' => 1,
            'item_question' => 'Son las terminaciones de los verbos antes de ser conjugados en cualquier tiempo:',
            'item_time' => 10,
        ]);
    }
}