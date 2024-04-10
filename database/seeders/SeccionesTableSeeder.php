<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeccionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sliders = [
            [
                'titulo' => 'Como hacer mi envio',
                'descripcion' => 'block-adhoc-envio',
                'html' => '<p class="titular">¿Cómo hacer mi <span class="text-highlight">envío?</span></p>
                <p class="subtitular">Te explicamos cómo hacerlo</p>',
                'idioma_id' => 1,
                'galeria_id_back' => 7,
                'galeria_id_ico' => null,

                'pais_id' => 1,
                'boton_1' => "Saber más",
                'url_1' => "envios-servicios-expresos",
                'slug_1' => "envios-servicios-expresos",
                'boton_2' => null,
                'url_2' => null,
                'slug_2' => null,
                'estatus' => 1,
                'orden' => 1               
            ],
            [
                'titulo' => 'Como hacer mi envio',
                'descripcion' => 'my_casillero_ico',
                'html' => '<p class="titular">Únete a nuestro <span class="text-highlight">Casillero<br>GRATUITO</span>
                para realizar tus envíos, <br>comprar estés donde estés y mucho más</p>
                <p></p>',
                'idioma_id' => 1,
                'galeria_id_back' => 8,
                'galeria_id_ico' => 9,
                'pais_id' => 1,
                'boton_1' => "Saber más",
                'url_1' => "",
                'slug_1' => "mycasillero",
                'boton_2' => null,
                'url_2' => null,
                'slug_2' => null,
                'estatus' => 1,
                'orden' => 1               
            ],


            [
                'titulo' => 'Como hacer mi envio',
                'descripcion' => 'block-adhoc-envio',
                'html' => '<p class="titular">¿Cómo hacer mi <span class="text-highlight">envío?</span></p>
                <p class="subtitular">Te explicamos cómo hacerlo</p>',
                'idioma_id' => 1,
                'galeria_id_back' => 7,
                'galeria_id_ico' => null,

                'pais_id' => 2,
                'boton_1' => "Saber más",
                'url_1' => "envios-servicios-expresos",
                'slug_1' => "envios-servicios-expresos",
                'boton_2' => null,
                'url_2' => null,
                'slug_2' => null,
                'estatus' => 1,
                'orden' => 1               
            ],
            [
                'titulo' => 'Como hacer mi envio',
                'descripcion' => 'my_casillero_ico',
                'html' => '<p class="titular">Únete a nuestro <span class="text-highlight">Casillero<br>GRATUITO</span>
                para realizar tus envíos, <br>comprar estés donde estés y mucho más</p>
                <p></p>',
                'idioma_id' => 1,
                'galeria_id_back' => 8,
                'galeria_id_ico' => 9,
                'pais_id' => 2,
                'boton_1' => "Saber más",
                'url_1' => "",
                'slug_1' => "envios-servicios-expresos",
                'boton_2' => null,
                'url_2' => null,
                'slug_2' => null,
                'estatus' => 1,
                'orden' => 1               
            ],

            
            // Agrega más datos según sea necesario
        ];

        DB::table('tseccion')->insert($sliders);
    }
}
