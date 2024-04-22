<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Serie;
use App\Models\Capitulo;
use App\Models\Temporada;

class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $serie = Serie::create([
            'nombre' => 'Shōgun',
            'genero' => 'Drama',
            'numero_temporadas' => 1,
            'sinopsis' => 'Set in Japan in the 1600s, Lord Yoshii Toranaga fights for his life when his enemies on the Council of Regents gang up on him over a mysterious European ship that is found abandoned in a nearby fishing village.',
            'caratula' => 'movie_poster/shogun.jpeg',
        ]);

        $temporadasData = [
            // Temporada 1
            [
                'numero_temporada' => 1,
                'nombre' => 'Temporada 1',
            ],
        ];
        foreach ($temporadasData as $temporadaData) {
            $temporada = $serie->temporadas()->create($temporadaData);
        
            $capitulosData = [
                [   
                    'nombre_capitulo' => 'Cap 1',
                    'numero_episodio' => 1,
                    'duracion' => 45,
                    'link' => 'HGMfpNxv5H4',
                ],
                [
                    'nombre_capitulo' => 'Cap 2',
                    'numero_episodio' => 2,
                    'duracion' => 50,
                    'link' => 'HGMfpNxv5H4',
                ],
            ];
        
            $temporada->capitulos()->createMany($capitulosData);
        }
    }
}
