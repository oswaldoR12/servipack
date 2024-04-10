<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GaleriaTableSeeder extends Seeder
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
                'ruta' => 'img/inicio/imagen_desktop_1.webp',
                'categoria_id' => 1,
                'estatus' => 1,
                'titulo' => 'slider desktop 1',
                'slug' => 'slider-desktop-1',
                'pais_id' => 1,
            ],
            [
                'ruta' => 'img/inicio/imagen_mobile_1.webp',
                'categoria_id' => 1,
                'estatus' => 1,
                'titulo' => 'slider mobile 1',
                'slug' => 'slider-mobile-1',
                'pais_id' => 1,
            ],

            [
                'ruta' => 'img/inicio/imagen_desktop_2.webp',
                'categoria_id' => 1,
                'estatus' => 1,
                'titulo' => 'slider desktop 2',
                'slug' => 'slider-desktop-2',
                'pais_id' => 1,
            ],
            [
                'ruta' => 'img/inicio/imagen_mobile_2.webp',
                'categoria_id' => 1,
                'estatus' => 1,
                'titulo' => 'slider mobile 2',
                'slug' => 'slider-mobile-2',
                'pais_id' => 1,
            ],

            [
                'ruta' => 'img/inicio/imagen_desktop_3.webp',
                'categoria_id' => 1,
                'estatus' => 1,
                'titulo' => 'slider desktop 3',
                'slug' => 'slider-desktop-3',
                'pais_id' => 1,
            ],
            [
                'ruta' => 'img/inicio/imagen_mobile_3.webp',
                'categoria_id' => 1,
                'estatus' => 1,
                'titulo' => 'slider mobile 3',
                'slug' => 'slider-mobile-3',
                'pais_id' => 1,
            ],
            // secciones

            [
                'ruta' => 'img/inicio/envio-2x.webp',
                'categoria_id' => 1,
                'estatus' => 1,
                'titulo' => '',
                'slug' => 'envios-servicios-expresos',
                'pais_id' => 1,
            ],
            [
                'ruta' => 'img/img-css/my-casillero.webp',
                'categoria_id' => 1,
                'estatus' => 1,
                'titulo' => '',
                'slug' => 'my-casillero_back',
                'pais_id' => 1,
            ],
            [
                'ruta' => 'img/inicio/mycasillero-logo.png',
                'categoria_id' => 1,
                'estatus' => 1,
                'titulo' => '',
                'slug' => 'my-casillero_ico',
                'pais_id' => 1,
            ],

            //USA

            [
                'ruta' => 'img/inicio/imagen_desktop_1.webp',
                'categoria_id' => 1,
                'estatus' => 1,
                'titulo' => 'slider desktop 1',
                'slug' => 'slider-desktop-1',
                'pais_id' => 2,
            ],
            [
                'ruta' => 'img/inicio/imagen_mobile_1.webp',
                'categoria_id' => 1,
                'estatus' => 1,
                'titulo' => 'slider mobile 1',
                'slug' => 'slider-mobile-1',
                'pais_id' => 2,
            ],

            [
                'ruta' => 'img/inicio/imagen_desktop_2.webp',
                'categoria_id' => 1,
                'estatus' => 1,
                'titulo' => 'slider desktop 2',
                'slug' => 'slider-desktop-2',
                'pais_id' => 2,
            ],
            [
                'ruta' => 'img/inicio/imagen_mobile_2.webp',
                'categoria_id' => 1,
                'estatus' => 1,
                'titulo' => 'slider mobile 2',
                'slug' => 'slider-mobile-2',
                'pais_id' => 2,
            ],

            [
                'ruta' => 'img/inicio/imagen_desktop_3.webp',
                'categoria_id' => 1,
                'estatus' => 1,
                'titulo' => 'slider desktop 3',
                'slug' => 'slider-desktop-3',
                'pais_id' => 2,
            ],
            [
                'ruta' => 'img/inicio/imagen_mobile_3.webp',
                'categoria_id' => 1,
                'estatus' => 1,
                'titulo' => 'slider mobile 3',
                'slug' => 'slider-mobile-3',
                'pais_id' => 2,
            ],
            // secciones

            [
                'ruta' => 'img/inicio/envio-2x.webp',
                'categoria_id' => 1,
                'estatus' => 1,
                'titulo' => '',
                'slug' => 'envios-servicios-expresos',
                'pais_id' => 2,
            ],
            [
                'ruta' => 'img/img-css/my-casillero.webp',
                'categoria_id' => 1,
                'estatus' => 1,
                'titulo' => '',
                'slug' => 'my-casillero_back',
                'pais_id' => 2,
            ],
            [
                'ruta' => 'img/inicio/mycasillero-logo.png',
                'categoria_id' => 1,
                'estatus' => 1,
                'titulo' => '',
                'slug' => 'my-casillero_ico',
                'pais_id' => 2,
            ],
            
            
            // Agrega más datos según sea necesario
        ];

        DB::table('tgaleria')->insert($galerias);
    }
}
