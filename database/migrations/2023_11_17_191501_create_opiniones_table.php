<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpinionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topiniones', function (Blueprint $table) {
            $table->id('opinion_id');
            $table->string('nombre');
            $table->text('opinion');
            $table->integer('estatus');
            $table->integer('idioma_id');
            $table->integer('galeria_id')->nullable();
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
        Schema::dropIfExists('topiniones');
    }
}
