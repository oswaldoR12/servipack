<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRutasIdToTcalendario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tcalendario', function (Blueprint $table) {
            // Añadir nuevo campo 'rutas_id'
            $table->bigInteger('rutas_id')->unsigned()->nullable();

            // Definir la clave foránea
            $table->foreign('rutas_id')->references('rutas_id')->on('trutas_pais');

            // Puedes ajustar el nombre de la clave foránea según sea necesario
            // $table->foreign('rutas_id')->references('id')->on('trutas_pais')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tcalendario', function (Blueprint $table) {
            // Eliminar la clave foránea y el campo 'rutas_id' en la reversión de la migración
            $table->dropForeign(['rutas_id']);
            $table->dropColumn('rutas_id');
        });
    }
}
