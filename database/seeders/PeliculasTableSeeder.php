<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeliculasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Media::create([
            'titulo_medio' => 'Kung Fu Panda 4',
            'sinopsis' => "Animated movie for family audiences that is the fourth installment of the Kung Fu Panda franchise. It's time for Po to take the next step in his journey. After years of being the Dragon Warrior alongside Master Shifu, the martial arts expert panda will ascend to Spirit Leader of the Valley of Peace. To achieve this, he needs to find and train a new Dragon Warrior. ",
            'caratula' => , // Genera una URL de imagen aleatoria
            'genero' => $faker->randomElement(['Action', 'Comedy', 'Drama', 'Sci-fi', 'Fantasy']),
            'duracion_total' => $faker->numberBetween(60, 240),
            'link' => $faker->imageUrl(),
            'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => now(),

        ]);
    }
}
