<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EuropaDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $galerias = [

            [
                'ruta' => 'img/inicio/imagen_desktop_1_europa.webp',
                'categoria_id' => 1,
                'estatus' => 1,
                'titulo' => 'slider desktop 1',
                'slug' => 'slider-desktop-1',
                'pais_id' => 4,
            ],
            [
                'ruta' => 'img/inicio/imagen_mobile_1_europa.webp',
                'categoria_id' => 1,
                'estatus' => 1,
                'titulo' => 'slider mobile 1',
                'slug' => 'slider-mobile-1',
                'pais_id' => 4,
            ],

            [
                'ruta' => 'img/inicio/imagen_desktop_2_europa.webp',
                'categoria_id' => 1,
                'estatus' => 1,
                'titulo' => 'slider desktop 2',
                'slug' => 'slider-desktop-2',
                'pais_id' => 4,
            ],
            [
                'ruta' => 'img/inicio/imagen_mobile_2_europa.webp',
                'categoria_id' => 1,
                'estatus' => 1,
                'titulo' => 'slider mobile 2',
                'slug' => 'slider-mobile-2',
                'pais_id' => 4,
            ],

            [
                'ruta' => 'img/inicio/imagen_desktop_3_europa.webp',
                'categoria_id' => 1,
                'estatus' => 1,
                'titulo' => 'slider desktop 3',
                'slug' => 'slider-desktop-3',
                'pais_id' => 4,
            ],
            [
                'ruta' => 'img/inicio/imagen_mobile_3_europa.webp',
                'categoria_id' => 1,
                'estatus' => 1,
                'titulo' => 'slider mobile 3',
                'slug' => 'slider-mobile-3',
                'pais_id' => 4,
            ],
            [
                'ruta' => 'img/inicio/imagen_desktop_4_europa.webp',
                'categoria_id' => 1,
                'estatus' => 1,
                'titulo' => 'slider desktop 4',
                'slug' => 'slider-desktop-4',
                'pais_id' => 4,
            ],
            [
                'ruta' => 'img/inicio/imagen_mobile_4_europa.webp',
                'categoria_id' => 1,
                'estatus' => 1,
                'titulo' => 'slider mobile 4',
                'slug' => 'slider-mobile-4',
                'pais_id' => 4,
            ],
            
            // secciones

            [
                'ruta' => 'img/inicio/envio-2x.webp',
                'categoria_id' => 1,
                'estatus' => 1,
                'titulo' => '',
                'slug' => 'envios-servicios-expresos',
                'pais_id' => 4,
            ],
            [
                'ruta' => 'img/img-css/my-casillero.webp',
                'categoria_id' => 1,
                'estatus' => 1,
                'titulo' => '',
                'slug' => 'my-casillero_back',
                'pais_id' => 4,
            ],
            [
                'ruta' => 'img/inicio/mycasillero-logo.png',
                'categoria_id' => 1,
                'estatus' => 1,
                'titulo' => '',
                'slug' => 'my-casillero_ico',
                'pais_id' => 4,
            ],
            
            
            // Agrega más datos según sea necesario
        ];

        DB::table('tgaleria')->insert($galerias);

        $opiniones = [
            [
                'nombre' => 'Karla Alejandra Torrealba Balza',
                'opinion' => '<p>Excelente servicio.</p>
                                <p>En todo momento dispuesto ayudar. Me resolvieron un envío súper impórtate q
                                    tenia q hacer con urgencia y me facilitaron en buscarlo hasta la puerta de
                                    mi ubicación. Y todo esto a última hora por mi parte. De verdad que
                                    agradecida con todo el personal. En especial a Maria Alejandra... Gracias
                                    nuevamente. 100% recomendable</p>',
                'estatus' => 1,
                'idioma_id' => 1,
                'galeria_id' => 1,
                'pais_id' => 4,
                'orden' => 1               
            ],
            [
                'nombre' => 'Adriana de ois',
                'opinion' => '<p>Excelente servicio y rapidez a la hora de solicitar cotización y la recogida, siempre están activos y te responden muy rápido.</p>',
                'estatus' => 1,
                'idioma_id' => 1,
                'galeria_id' => 1,
                'pais_id' => 4,
                'orden' => 2            
            ],
            [
                'nombre' => 'Patricia Vallejo',
                'opinion' => ' <p>Atención de primera, la carga llega en buen tiempo a cualquier ciudad de
                Venezuela y todo llego perfecto. Los recomiendo</p>',
                'estatus' => 1,
                'idioma_id' => 1,
                'galeria_id' => 1,
                'pais_id' => 4,
                'orden' => 3               
            ],[
                'nombre' => 'Jesús Molina',
                'opinion' => '<p>La atención al cliente es excelente y la monitorización, estoy muy contento,
                realice un pedido en Shein y acaba de llegar a mi casillero, en espera de
                que llegue a Venezuela.</p>

            <p>Los recomiendo 100%</p>',
                'estatus' => 1,
                'idioma_id' => 1,
                'galeria_id' => 1,
                'pais_id' => 4,
                'orden' => 4               
            ],
            [
                'nombre' => 'Hannly Valera',
                'opinion' => '<p>Los recomiendos excelente servicio y confiables ya he enviado varias cajas de
                    España a Venezuela y super bien los recomiendo mucho.</p>',
                'estatus' => 1,
                'idioma_id' => 1,
                'galeria_id' => 1,
                'pais_id' => 4,
                'orden' => 5               
            ],

            
            // Agrega más datos según sea necesario
        ];

        DB::table('topiniones')->insert($opiniones);

        $tsecciones = [
            [
                'titulo' => 'Como hacer mi envio',
                'descripcion' => 'block-adhoc-envio',
                'html' => '<p class="titular">¿Cómo hacer mi <span class="text-highlight">envío?</span></p>
                <p class="subtitular">Te explicamos cómo hacerlo</p>',
                'idioma_id' => 1,
                'galeria_id_back' => 7,
                'galeria_id_ico' => null,

                'pais_id' => 4,
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
                'pais_id' => 4,
                'boton_1' => "Saber más",
                'url_1' => "",
                'slug_1' => "mycasillero",
                'boton_2' => null,
                'url_2' => null,
                'slug_2' => null,
                'estatus' => 1,
                'orden' => 1               
            ],

            
            
            // Agrega más datos según sea necesario
        ];

        DB::table('tseccion')->insert($tsecciones);



        $sliders = [
            

            [
                'titulo' => 'titulo 1',
                'descripcion' => 'descripcion 1',
                'slug' => 'titulo-1',
                'idioma_id' => 1,
                'galeria_id_d' => 37,
                'galeria_id_m' => 38,
                'pais_id' => 4,
                'estatus' => 1,
                'url' => '',
                'orden' => 1               
            ],
            [
                'titulo' => 'titulo 2',
                'descripcion' => 'descripcion 2',
                'slug' => 'titulo-2',
                'idioma_id' => 1,
                'galeria_id_d' => 39,
                'galeria_id_m' => 40,
                'pais_id' => 4,
                'estatus' => 1,
                'url' => '',
                'orden' => 2            
            ],
            [
                'titulo' => 'titulo 3',
                'descripcion' => 'descripcion 3',
                'slug' => 'titulo-3',
                'idioma_id' => 1,
                'galeria_id_d' => 41,
                'galeria_id_m' => 42,
                'pais_id' => 4,
                'estatus' => 1,
                'url' => '',
                'orden' => 3               
            ],[
                'titulo' => 'titulo 3',
                'descripcion' => 'descripcion 3',
                'slug' => 'titulo-3',
                'idioma_id' => 1,
                'galeria_id_d' => 43,
                'galeria_id_m' => 44,
                'pais_id' => 4,
                'estatus' => 1,
                'url' => '',
                'orden' => 4               
            ]

            
            // Agrega más datos según sea necesario
        ];

        DB::table('tslider')->insert($sliders);
    }
}
