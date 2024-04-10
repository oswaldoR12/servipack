<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tservicios', function (Blueprint $table) {
            $table->id('servicio_id');
            $table->string('titulo');
            $table->string('descripcion');
            $table->integer('estatus');
            $table->text('boton');
            $table->string('url');
            $table->string('slug');
            $table->integer('galeria_id');
            $table->integer('idioma_id');
            $table->integer('pais_id');
            $table->integer('orden');

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
        Schema::dropIfExists('tservicios');
    }
}
