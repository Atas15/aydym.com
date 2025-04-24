<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        $objs = ['Pop', 'Rep', 'Rock', 'Folk', 'Latino' ];

        foreach ($objs as $obj) {
            Genre::create(['name' => $obj]);
        }
    }
}
