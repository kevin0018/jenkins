<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->enum('genero', ['Action', 'Comedy', 'Drama', 'Sci-fi', 'Fantasy']);
            $table->integer('numero_temporadas');
            $table->text('sinopsis');
            $table->integer('duracion_total');
            $table->text('caratula');
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
        Schema::dropIfExists('series');
    }
}
