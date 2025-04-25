<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function show()
    {

        $album = Album::get();
        $songs = Song::where('album_id', $album->id)
            ->get();

        return view('song.show')->with([
            'songs' => $songs
        ]);
    }
}
