<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadetes', function (Blueprint $table) {
            $table->bigIncrements('idcadetes');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cuil');
            $table->string('telefono');
            $table->binary('foto');
            $table->string('mail')->unique();
            $table->string('contrasenia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cadetes');
    }
}
