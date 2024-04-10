<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdiomaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tidiomas = [
            ['descripcion' => 'español'],
            ['descripcion' => 'ingles'],
            // Agrega otros registros aquí
        ];

        DB::table('tidiomas')->insert($tidiomas);
    }
}
