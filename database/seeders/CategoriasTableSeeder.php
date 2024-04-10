<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = [
            ['descripcion' => 'SLIDER', 'estatus' => 1],
            ['descripcion' => 'secciones', 'estatus' => 1],
            // Agrega otros registros aquí
        ];

        DB::table('tcategorias')->insert($categorias);
    }
}
