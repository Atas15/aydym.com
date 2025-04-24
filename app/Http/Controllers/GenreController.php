<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Genre;
use App\Models\Song;

class GenreController extends Controller
{
    public function index()
    {

        $genres = Genre::get();


        return view('genre.index')->with([
            'genres' => $genres
        ]);
    }

    public function show($id)
    {

        $genre = Genre::find($id);
        $songs = Song::where('genre_id', $genre->id)
            ->get();

        return view('genre.show')->with([
            'songs' => $songs
        ]);
    }
}
