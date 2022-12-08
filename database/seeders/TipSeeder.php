<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TipSeeder extends Seeder
{

    public function run()
    {
        DB::table('tips')->insert([ 
            'titulo' => "Los dinosaurios blindados no solo usaron sus colas de mazo para luchar contra T. rex",
            'contenido' => "Algunos dinosaurios son automáticamente geniales. Tiranosaurio rex aterrador. Triceratops con cuernos. Anquilosaurios puntiagudos: dinosaurios achaparrados y acorazados con colas malvadas.",
            'imagen' => "https://cerebrodigital.net/wp-content/uploads/2022/12/anquilosaurios_jhgv-lanczos3-768x432.jpg",
            'enlace' => "https://cerebrodigital.net/los-dinosaurios-blindados-no-solo-usaron-sus-colas-de-mazo-para-luchar-contra-t-rex-eacr/",
        ]);
        DB::table('tips')->insert([ 
            'titulo' => "Neuralink bajo investigación por posibles violaciones al bienestar animal",
            'contenido' => "Neuralink, la startup de implantes cerebrales cofundada por Elon Musk, está bajo investigación federal por posibles violaciones del bienestar animal.",
            'imagen' => "https://cerebrodigital.net/wp-content/uploads/2022/12/Neuralink_pong_jkhgv-lanczos3-768x432.jpg",
            'enlace' => "https://cerebrodigital.net/neuralink-bajo-investigacion-por-posibles-violaciones-al-bienestar-animal-eacr/",
        ]);
        DB::table('tips')->insert([ 
            'titulo' => "Restos perdidos hace mucho tiempo del último tigre de Tasmania encontrados en un armario del museo",
            'contenido' => "Después de estar desaparecido durante más de 85 años, los restos perdidos hace mucho tiempo del último tilacino conocido, también conocido como el tigre de Tasmania.",
            'imagen' => "https://cerebrodigital.net/wp-content/uploads/2022/12/Tigre_de_tasmania_jhg-bicubic-768x432.jpg",
            'enlace' => "https://cerebrodigital.net/restos-perdidos-hace-mucho-tiempo-del-ultimo-tigre-de-tasmania-encontrados-en-un-armario-del-museo-eacr/",
        ]);
        DB::table('tips')->insert([ 
            'titulo' => "Los lideres mundiales tienen 2 semanas para acordar un plan para salvar la naturaleza",
            'contenido' => "Uno de los eventos más importantes para la vida en la Tierra está a punto de comenzar. Esta semana y la próxima, delegados de más de 190 países se reunirán en Montreal, Canadá.",
            'imagen' => "https://cerebrodigital.net/wp-content/uploads/2022/12/tortuga_jhg-bell-768x432.jpg",
            'enlace' => "https://cerebrodigital.net/los-lideres-mundiales-tienen-2-semanas-para-acordar-un-plan-para-salvar-la-naturaleza-eacr/",
        ]);
        DB::table('tips')->insert([ 
            'titulo' => "Agujero de gusano transitable recreado en una computadora cuántica por primera vez",
            'contenido' => "Los agujeros de gusano son un elemento básico de la ciencia ficción, y existe la posibilidad de que existan en el universo real. Pero, ¿cómo funcionarían?",
            'imagen' => "https://cerebrodigital.net/wp-content/uploads/2022/11/agujero_de_gusano_kjhc-lanczos3-768x432.jpg",
            'enlace' => "https://cerebrodigital.net/agujero-de-gusano-transitable-recreado-en-una-computadora-cuantica-por-primera-vez-eacr/",
        ]);
    }
}
