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
        Schema::create('capitulo', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_capitulo');
            $table->string('caratula')->nullable(); // Cambiado a tipo string
            $table->unsignedBigInteger('serie_id');
            $table->foreign('serie_id')->references('id')->on('serie');
            $table->integer('numero_temporada');
            $table->integer('numero_episodio');
            $table->string('link');
            $table->integer('duracion'); // Duración del capítulo en minutos
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
        Schema::dropIfExists('capitulo');
    }
};
