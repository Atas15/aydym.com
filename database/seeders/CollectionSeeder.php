<?php

namespace Database\Seeders;

use App\Models\Collection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollectionSeeder extends Seeder
{

    public function run(): void
    {
        $objs = ['Top charts', 'Audio books', 'Car musics', 'Holiday musics', 'Others' ];

        foreach ($objs as $obj) {
            Collection::create(['name' => $obj]);
        }
    }
}
