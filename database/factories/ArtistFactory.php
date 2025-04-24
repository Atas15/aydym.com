<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class ArtistFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->boolean(50)
                ? fake()->paragraph(1)
                : null,
        ];
    }
}
