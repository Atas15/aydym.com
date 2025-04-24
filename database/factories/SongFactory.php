<?php

namespace Database\Factories;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;


class SongFactory extends Factory
{

    public function definition(): array
    {
        $artist = Artist::inRandomOrder()->first();
        $genre = Genre::inRandomOrder()->first();
        $album = Album::inRandomOrder()->first();

        return [
            'name' => fake()->name(),
            'artist_id' => $artist->id,
            'genre_id' => $genre->id,
            'album_id' => $album->id,
        ];
    }
}
