<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderTableSeeder extends Seeder
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
                'titulo' => 'titulo 1',
                'descripcion' => 'descripcion 1',
                'slug' => 'titulo-1',
                'idioma_id' => 1,
                'galeria_id_d' => 1,
                'galeria_id_m' => 2,
                'pais_id' => 1,
                'estatus' => 1,
                'url' => '',
                'orden' => 1               
            ],
            [
                'titulo' => 'titulo 2',
                'descripcion' => 'descripcion 2',
                'slug' => 'titulo-2',
                'idioma_id' => 1,
                'galeria_id_d' => 3,
                'galeria_id_m' => 4,
                'pais_id' => 1,
                'estatus' => 1,
                'url' => '',
                'orden' => 2            
            ],
            [
                'titulo' => 'titulo 3',
                'descripcion' => 'descripcion 3',
                'slug' => 'titulo-3',
                'idioma_id' => 1,
                'galeria_id_d' => 5,
                'galeria_id_m' => 6,
                'pais_id' => 1,
                'estatus' => 1,
                'url' => '',
                'orden' => 3               
            ],


            //USA

            [
                'titulo' => 'titulo 1',
                'descripcion' => 'descripcion 1',
                'slug' => 'titulo-1',
                'idioma_id' => 1,
                'galeria_id_d' => 5,
                'galeria_id_m' => 6,
                'pais_id' => 2,
                'estatus' => 1,
                'url' => '',
                'orden' => 1               
            ],
            [
                'titulo' => 'titulo 2',
                'descripcion' => 'descripcion 2',
                'slug' => 'titulo-2',
                'idioma_id' => 1,
                'galeria_id_d' => 5,
                'galeria_id_m' => 6,
                'pais_id' => 2,
                'estatus' => 1,
                'url' => '',
                'orden' => 2            
            ],
            [
                'titulo' => 'titulo 3',
                'descripcion' => 'descripcion 3',
                'slug' => 'titulo-3',
                'idioma_id' => 1,
                'galeria_id_d' => 5,
                'galeria_id_m' => 6,
                'pais_id' => 2,
                'estatus' => 1,
                'url' => '',
                'orden' => 3               
            ],


            //ECUADOR

            

            
            // Agrega más datos según sea necesario
        ];

        DB::table('tslider')->insert($sliders);
    }
}
