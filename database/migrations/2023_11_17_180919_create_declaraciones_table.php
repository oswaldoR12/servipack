<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeclaracionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tdeclaraciones', function (Blueprint $table) {

            $table->id('declaracion_id');
            $table->string('descripcion');
            $table->integer('idioma_id');
            $table->integer('galeria_id');
            $table->integer('pais_id');
            $table->text('estrellas');
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
        Schema::dropIfExists('tdeclaraciones');
    }
}
