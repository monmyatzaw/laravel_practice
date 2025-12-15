<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name,
            'year' => rand(1990,2025),
            'description' => fake()->sentence,
            'movie_id' => rand(1, 40),
            'director' => fake()->name,
            'rating' => rand(0,5),
            
        ];
    }
}
