<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PaisTableSeeder::class,
            CategoriasTableSeeder::class,
            GaleriaTableSeeder::class,
            IdiomaTableSeeder::class,
            SliderTableSeeder::class,
            SeccionesTableSeeder::class,
            OpinionTableSeeder::class,
            VenezuelaDataSeeder::class,
            EcuadorDataSeeder::class,
            EuropaDataSeeder::class,
            PerfilDataSeeder::class,
            UserDataSeeder::class,
            RutasDataSeeder::class,
            
        ]);
        }
}
