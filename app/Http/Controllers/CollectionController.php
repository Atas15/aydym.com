<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Song;


class CollectionController extends Controller
{
    public function index()
    {

        $collections = Collection::get();


        return view('collection.index')->with([
            'collections' => $collections
        ]);
    }

    public function show($id)
    {

        $collection = Collection::find($id);
        $songs = Song::where('collection_id', $collection->id)
            ->get();

        return view('collection.show')->with([
            'collection' => $collection,
            'songs' => $songs
        ]);
    }
}
