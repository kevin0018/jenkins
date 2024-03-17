<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->randomElement(['Action', 'Comedy', 'Drama']).' '.$this->faker->randomElement(['Movie', 'Film']).' Directed by '.$this->faker->name,
            'description' => $this->faker->paragraph,
            'release_date' => $this->faker->date,
        ];
    }
}
