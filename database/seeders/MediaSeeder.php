<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Media;
use Faker\Factory as Faker;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            Media::create([
                'titulo_medio' => $faker->sentence,
                'sinopsis' => $faker->paragraph,
                'caratula' => $faker->imageUrl(), // Genera una URL de imagen aleatoria
                'genero' => $faker->randomElement(['Acción', 'Comedia', 'Drama', 'Ciencia ficción', 'Fantasía']),
                'duracion_total' => $faker->numberBetween(60, 240),
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ]);
        }
    }
}
