<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerfilDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tusuarios_perfiles = [
            ['nombre' => 'Admin', 'activo' => 1],
            ['nombre' => 'Agente autorizado', 'activo' => 1],
            // Agrega otros registros aquí
        ];

        DB::table('tusuarios_perfiles')->insert($tusuarios_perfiles);
    }
}
