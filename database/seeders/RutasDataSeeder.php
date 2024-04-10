<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RutasDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $rutas = [
            [
                'descripcion' => 'Colombia - Venezuela',
                'pais_id_origen' => 1,
                'pais_id_destino' => 5,
                'activo' => 1,
                'inversa' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                
                'descripcion' => 'Venezuela - Colombia' ,
                'pais_id_origen' => 5,
                'pais_id_destino' => 1,
                'activo' => 1,
                'inversa' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'descripcion' => 'Ecuador - Venezuela',
                'pais_id_origen' => 3,
                'pais_id_destino' => 5,
                'activo' => 1,
                'inversa' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                
                'descripcion' => 'Venezuela - Ecuador' ,
                'pais_id_origen' => 5,
                'pais_id_destino' => 3,
                'activo' => 1,
                'inversa' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                
                'descripcion' => 'España - Colombia' ,
                'pais_id_origen' => 4,
                'pais_id_destino' => 1,
                'activo' => 1,
                'inversa' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                
                'descripcion' => 'España - Venezuela' ,
                'pais_id_origen' => 4,
                'pais_id_destino' => 5,
                'activo' => 1,
                'inversa' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                
                'descripcion' => 'España - Rep. Dominicana' ,
                'pais_id_origen' => 4,
                'pais_id_destino' => 8,
                'activo' => 1,
                'inversa' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                
                'descripcion' => 'USA - Venezuela' ,
                'pais_id_origen' => 2,
                'pais_id_destino' => 5,
                'activo' => 1,
                'inversa' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                
                'descripcion' => 'Venezuela - USA' ,
                'pais_id_origen' => 5,
                'pais_id_destino' => 2,
                'activo' => 1,
                'inversa' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                
                'descripcion' => 'Venezuela - España' ,
                'pais_id_origen' => 5,
                'pais_id_destino' => 4,
                'activo' => 1,
                'inversa' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Agrega otros registros aquí
        ];

        DB::table('trutas_pais')->insert($rutas);
        // Puedes agregar más registros según sea necesario.
    }
}
