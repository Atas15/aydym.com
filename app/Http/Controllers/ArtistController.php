<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Song;


class ArtistController extends Controller
{
    public function index()
    {
        $artists = Artist::get();

        return view('artist.index')->with([
            'artists' => $artists,
        ]);
    }

    public function show($id)
    {

        $artist = Artist::find($id);
        $albums = Album::where('artist_id', $artist->id)
            ->withCount('songs')
            ->get();

        return view('artist.show')->with([
            'artist' => $artist,
            'albums' => $albums
        ]);
    }
}
