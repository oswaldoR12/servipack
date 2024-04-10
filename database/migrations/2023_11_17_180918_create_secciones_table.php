<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tseccion', function (Blueprint $table) {

            $table->id('seccion_id');
            $table->string('titulo');
            $table->string('descripcion');
            $table->text('html');
            $table->integer('idioma_id');


            $table->integer('galeria_id_back')->nullable();

            $table->integer('galeria_id_ico')->nullable();


            $table->integer('pais_id');
            
            $table->text('boton_1')->nullable();
            $table->string('url_1')->nullable();
            $table->string('slug_1')->nullable();

            $table->text('boton_2')->nullable();
            $table->string('url_2')->nullable();
            $table->string('slug_2')->nullable();

            $table->integer('estatus');
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
        Schema::dropIfExists('tseccion');
    }
}
