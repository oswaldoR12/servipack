<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarifasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ttarifas', function (Blueprint $table) {
            $table->id('tarifa_id');
            $table->string('titulo');
            $table->string('descripcion');
            $table->integer('estatus');
            $table->integer('tarifa_json');

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
        Schema::dropIfExists('ttarifas');
    }
}
