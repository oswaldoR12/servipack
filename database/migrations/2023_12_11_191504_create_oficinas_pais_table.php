<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oficinas_pais', function (Blueprint $table) {
            $table->id('oficinas_pais_id');

            $table->string('nombre')->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->string('direccion')->nullable();
            $table->string('tipo')->nullable();
            $table->string('marker')->nullable();
            $table->string('como_llegar')->nullable();
            $table->string('icon')->nullable();
            $table->string('iconHeight')->nullable();
            $table->string('iconWidth')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oficinas_pais');
    }
};
