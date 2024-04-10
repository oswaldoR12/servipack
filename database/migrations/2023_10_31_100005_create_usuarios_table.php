<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tusuarios', function (Blueprint $table) {
            $table->id('usuario_id');
            $table->integer('usuario_perfil_id')->default(20);
            $table->integer('pais_id')->nullable();
            $table->enum('tipo_documento', ['V', 'E', 'P','J','G'])->nullable();
            $table->string('documento', 9)->nullable();
            $table->string('nombres',50);
            $table->string('apellidos', 50);
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken()->nullable();
            $table->boolean('activo')->default(1);
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
        Schema::dropIfExists('tusuarios');
    }
}
