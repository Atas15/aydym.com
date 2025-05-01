<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Song;


class SongController extends Controller
{
    public function show($id)
    {

        $album = Album::find($id);
        $songs = Song::where('album_id', $album->id)
            ->get();

        return view('song.show')->with([
            'album' => $album,
            'songs' => $songs
        ]);
    }
}
