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
                'genero' => $faker->randomElement(['Action', 'Comedy', 'Drama', 'Sci-fi', 'Fantasy']),
                'duracion_total' => $faker->numberBetween(60, 240),
                'link' => $faker->imageUrl(),
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),

            ]);
        }
    }
}
