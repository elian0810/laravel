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
        Schema::create('appoiment', function (Blueprint $table) {
            $table->id()->comment('ID de nuestra base de datos.');
            $table->string('name', 20)->comment('nombre del usuario');
            $table->string('lastName', 20)->comment('apellido del usuario');
            $table->string('identification')->comment('identificacion del usuario');
            $table->string('mascot', 20)->comment('nombre de la mascota');
            $table->dateTime('start')->comment('fecah de inicio de la cita ');
            $table->dateTime('end')->comment('fecah de fin de la cita');
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
        Schema::dropIfExists('appoiment');
    }
};
