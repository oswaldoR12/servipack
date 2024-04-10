<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRutasPais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('trutas_pais', function (Blueprint $table) {

            $table->id('rutas_id');
            $table->text('descripcion');
            $table->integer('pais_id_origen');
            $table->integer('pais_id_destino');
            $table->integer('activo');
            $table->integer('inversa');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trutas_pais');
    }
}
