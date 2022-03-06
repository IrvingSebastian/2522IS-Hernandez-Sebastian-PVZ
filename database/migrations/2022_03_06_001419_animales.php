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
        Schema::dropIfExists('Animales');

        Schema::create('Animales', function (Blueprint $table) {
            $table->id('ID');
            $table->string('Nombre');
            $table->string('Nombre_latino');
            $table->string('Tipo');
            $table->string('Tiempo_activo'); 
            $table->string('Longi_min');
            $table->string('Longi_max');
            $table->string('Peso_min');
            $table->string('Peso_max');
            $table->string('Esperanza_vida');
            $table->string('Habitat');
            $table->string('Dieta');
            $table->string('Rango_geo');
            $table->string('Imagen');
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
        //
    }
};
