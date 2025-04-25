<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Song;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        User::factory()
            ->count(10)
            ->create();

        Artist::factory()
            ->count(15)
            ->create();

        Album::factory()
            ->count(50)
            ->create();

        $this->call([
            GenreSeeder::class,
        ]);

        $this->call([
            CollectionSeeder::class,
        ]);

        Song::factory()
            ->count(1001)
            ->create();


    }
}
