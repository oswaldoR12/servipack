<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = [
            ['descripcion' => 'Colombia',
             'slug' => 'colombia',
             'class' => 'CO',
             'url_casillero' => ''],
            ['descripcion' => 'USA',
             'slug' => 'usa',
             'class' => 'US',
             'url_casillero' => ''],
            ['descripcion' => 'Ecuador',
             'slug' => 'ecuador',
             'class' => 'EC',
             'url_casillero' => ''],
            ['descripcion' => 'Europa',
             'slug' => 'europa',
             'class' => 'ES',
             'url_casillero' => ''],
            ['descripcion' => 'Venezuela',
             'slug' => 'venezuela',
             'class' => 'VE',
             'url_casillero' => ''],
            ['descripcion' => 'Mexico',
             'slug' => 'mexico',
             'class' => 'US',
             'url_casillero' => ''],
            ['descripcion' => 'Peru',
             'slug' => 'peru',
             'class' => 'US',
             'url_casillero' => ''],
            ['descripcion' => 'Republica Dominicana',
             'slug' => 'dominicana',
             'class' => 'US',
             'url_casillero' => 'CO'],
            



            // Agrega otros registros aquí
        ];

        DB::table('tpais')->insert($categorias);
    }
}
