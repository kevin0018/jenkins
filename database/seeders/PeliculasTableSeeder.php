<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Media;

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
            'caratula' => 'movie_poster/images.jpeg', 
            'genero' => 'Action',
            'duracion_total' => 120,
            'link' => 'yD8rNMiaX-w',
            'created_at' => '04/22/2023',
            'updated_at' => now(),
        ]);

        Media::create([
            'titulo_medio' => 'Kung Fu Panda 4',
            'sinopsis' => "Animated movie for family audiences that is the fourth installment of the Kung Fu Panda franchise. It's time for Po to take the next step in his journey. After years of being the Dragon Warrior alongside Master Shifu, the martial arts expert panda will ascend to Spirit Leader of the Valley of Peace. To achieve this, he needs to find and train a new Dragon Warrior. ",
            'caratula' => 'movie_poster/images.jpeg', 
            'genero' => 'Action',
            'duracion_total' => 120,
            'link' => 'yD8rNMiaX-w',
            'created_at' => '04/22/2023',
            'updated_at' => now(),
        ]);
    }
}
