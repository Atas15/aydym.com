<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Genre;

class HomeController extends Controller
{
    public function index()
    {

        $artists = Artist::all();

        $genres = Genre::all();





        return view('home.index')->with([
            'artists' => $artists,
            'genres' => $genres
        ]);
    }
}
