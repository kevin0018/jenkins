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
            'titulo_medio' => 'Migration. An upside-down journey',
            'sinopsis' => "Illumination and Universal Pictures studios join forces again in Migration. An upside-down journey, an animated comedy that follows young duck siblings who convince their overprotective father to let them embark on the vacation of their lives, while trying to migrate from New England - through New York City - and finally to the Bahamas. The film is produced by the company's founder, Chris Meledandri, and directed by Oscar-nominated Benjamin Renner (Ernest & Celestine) with an original screenplay by Mike White (School of Rock). ",
            'caratula' => 'movie_poster/images2.jpeg', 
            'genero' => 'Comedy',
            'duracion_total' => 150,
            'link' => 'cQfo0HJhCnE',
            'created_at' => '03/22/2023',
            'updated_at' => now(),
        ]);

        Media::create([
            'titulo_medio' => 'Wonka',
            'sinopsis' => "Musical fantasy about Willy Wonka (Timothée Chalamet) before becoming the greatest chocolate and candy maker in the world. His story depicts the vivid and mythical beginnings of an imaginative young inventor, who will soon become the famous and delicious Mozart of chocolate. ",
            'caratula' => 'movie_poster/images3.jpg', 
            'genero' => 'Fantasy',
            'duracion_total' => 80,
            'link' => 'EJoom2F-7nI',
            'created_at' => '05/22/2023',
            'updated_at' => now(),
        ]);

        Media::create([
            'titulo_medio' => 'Avatar: The Last Airbender',
            'sinopsis' => "The series focuses on the journey of 12-year-old Aang, the current Avatar and last survivor of his nation, the Air Nomads, along with his friends Sokka, Katara, and later Toph, as they strive to end the war of the Fire Nation against the other nations of the world.",
            'caratula' => 'movie_poster/images4.jpeg', 
            'genero' => 'Fantasy',
            'duracion_total' => 140,
            'link' => 'LOWBBMC__w0',
            'created_at' => '06/22/2023',
            'updated_at' => now(),
        ]);
    }
}
