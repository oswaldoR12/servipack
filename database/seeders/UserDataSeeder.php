<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $usuarios = [
            [
                'usuario_perfil_id' => 1,
                'tipo_documento' => 'V',
                'documento' => '123456789',
                'nombres' => 'Nombre',
                'apellidos' => 'Apellido',
                'pais_id' => '1',
                'email' => 'demo@demo.com',
                'password' => Hash::make('123123'),
                'email_verified_at' => now(),
                'remember_token' => "token",
                'activo' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'usuario_perfil_id' => 1,
                'tipo_documento' => 'V',
                'documento' => '123456789',
                'nombres' => 'Colombia',
                'apellidos' => 'SE',
                'pais_id' => '1',
                'email' => 'colombia@se.com',
                'password' => Hash::make('colombia.se'),
                'email_verified_at' => now(),
                'remember_token' => "token",
                'activo' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'usuario_perfil_id' => 1,
                'tipo_documento' => 'V',
                'documento' => '123456789',
                'nombres' => 'USA',
                'apellidos' => 'SE',
                'pais_id' => '2',
                'email' => 'usa@se.com',
                'password' => Hash::make('usa.se'),
                'email_verified_at' => now(),
                'remember_token' => "token",
                'activo' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'usuario_perfil_id' => 1,
                'tipo_documento' => 'V',
                'documento' => '123456789',
                'nombres' => 'Ecuador',
                'apellidos' => 'SE',
                'pais_id' => '3',
                'email' => 'ecuador@se.com',
                'password' => Hash::make('ecuador.se'),
                'email_verified_at' => now(),
                'remember_token' => "token",
                'activo' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'usuario_perfil_id' => 1,
                'tipo_documento' => 'V',
                'documento' => '123456789',
                'nombres' => 'Europa',
                'apellidos' => 'SE',
                'pais_id' => '4',
                'email' => 'europa@se.com',
                'password' => Hash::make('europa.se'),
                'email_verified_at' => now(),
                'remember_token' => "token",
                'activo' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'usuario_perfil_id' => 1,
                'tipo_documento' => 'V',
                'documento' => '123456789',
                'nombres' => 'Venezuela',
                'apellidos' => 'SE',
                'pais_id' => '5',
                'email' => 'venezuela@se.com',
                'password' => Hash::make('venezuela.se'),
                'email_verified_at' => now(),
                'remember_token' => "token",
                'activo' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
            ,[
                'usuario_perfil_id' => 1,
                'tipo_documento' => 'V',
                'documento' => '123456789',
                'nombres' => 'Admin',
                'apellidos' => 'SE',
                'pais_id' => '5',
                'email' => 'admin@se.com',
                'password' => Hash::make('serviciosexp'),
                'email_verified_at' => now(),
                'remember_token' => "token",
                'activo' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Agrega otros registros aquí
        ];

        DB::table('tusuarios')->insert($usuarios);
        // Puedes agregar más registros según sea necesario.
    }
}
