<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tslider', function (Blueprint $table) {
            $table->id('slider_id');
            $table->string('titulo');
            $table->string('descripcion');
            $table->string('slug');
            $table->integer('idioma_id');
            $table->integer('galeria_id_d');
            $table->integer('galeria_id_m');
            $table->integer('pais_id');
            $table->integer('estatus');
            $table->string('url');
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
        Schema::dropIfExists('tslider');
    }
}
