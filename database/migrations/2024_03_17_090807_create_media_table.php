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
            Schema::create('media', function (Blueprint $table) {
                $table->id();
                $table->string('titulo_medio');
                $table->text('sinopsis');
                $table->text('caratula');
                $table->enum('tipo',['Serie','Pelicula']);

                $table->enum('genero',['Action', 'Comedy', 'Drama', 'Sci-fi', 'Fantasy']);
                $table->integer('duracion_total');
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
            Schema::dropIfExists('media');
        }
    };
