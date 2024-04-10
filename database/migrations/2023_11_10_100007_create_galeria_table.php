<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaleriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tgaleria', function (Blueprint $table) {
            $table->id('galeria_id');
            $table->string('ruta');
            $table->integer('categoria_id');
            $table->integer('estatus');
            $table->string('titulo');
            $table->string('slug');

            $table->integer('pais_id');

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
        Schema::dropIfExists('tgaleria');
    }
}
