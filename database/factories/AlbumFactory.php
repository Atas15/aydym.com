<?php

namespace Database\Factories;

use App\Models\Artist;
use Illuminate\Database\Eloquent\Factories\Factory;


class AlbumFactory extends Factory
{

    public function definition(): array
    {
        $artist = Artist::inRandomOrder()->first();

        return [
            'name' => fake()->name(),
            'artist_id' => $artist->id,

        ];
    }
}
