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
            $table->foreignId('serie_id')->constrained(); // Clave foránea para la serie
            $table->string('titulo');
            $table->text('sinopsis');
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
