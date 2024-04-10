<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OpinionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
                'pais_id' => 1,
                'orden' => 1               
            ],
            [
                'nombre' => 'Adriana de ois',
                'opinion' => '<p>Excelente servicio y rapidez a la hora de solicitar cotización y la recogida, siempre están activos y te responden muy rápido.</p>',
                'estatus' => 1,
                'idioma_id' => 1,
                'galeria_id' => 1,
                'pais_id' => 1,
                'orden' => 2            
            ],
            [
                'nombre' => 'Patricia Vallejo',
                'opinion' => ' <p>Atención de primera, la carga llega en buen tiempo a cualquier ciudad de
                Venezuela y todo llego perfecto. Los recomiendo</p>',
                'estatus' => 1,
                'idioma_id' => 1,
                'galeria_id' => 1,
                'pais_id' => 1,
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
                'pais_id' => 1,
                'orden' => 4               
            ],
            [
                'nombre' => 'Hannly Valera',
                'opinion' => '<p>Los recomiendos excelente servicio y confiables ya he enviado varias cajas de
                    España a Venezuela y super bien los recomiendo mucho.</p>',
                'estatus' => 1,
                'idioma_id' => 1,
                'galeria_id' => 1,
                'pais_id' => 1,
                'orden' => 5               
            ],



            //USA
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
                'pais_id' => 2,
                'orden' => 1               
            ],
            [
                'nombre' => 'Adriana de ois',
                'opinion' => '<p>Excelente servicio y rapidez a la hora de solicitar cotización y la recogida, siempre están activos y te responden muy rápido.</p>',
                'estatus' => 1,
                'idioma_id' => 1,
                'galeria_id' => 1,
                'pais_id' => 2,
                'orden' => 2            
            ],
            [
                'nombre' => 'Patricia Vallejo',
                'opinion' => ' <p>Atención de primera, la carga llega en buen tiempo a cualquier ciudad de
                Venezuela y todo llego perfecto. Los recomiendo</p>',
                'estatus' => 1,
                'idioma_id' => 1,
                'galeria_id' => 1,
                'pais_id' => 2,
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
                'pais_id' => 2,
                'orden' => 4               
            ],
            [
                'nombre' => 'Hannly Valera',
                'opinion' => '<p>Los recomiendos excelente servicio y confiables ya he enviado varias cajas de
                    España a Venezuela y super bien los recomiendo mucho.</p>',
                'estatus' => 1,
                'idioma_id' => 1,
                'galeria_id' => 1,
                'pais_id' => 2,
                'orden' => 5               
            ],

            
            // Agrega más datos según sea necesario
        ];

        DB::table('topiniones')->insert($opiniones);
    }
}
