@extends('layouts.app')
@section('title')
    Home
@endsection
@section('content')
    <div class="h3 mb-3">
        Genres
    </div>
    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-2 g-sm-3 mb-4">
        @foreach($genres as $genre)
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="fs-5">{{ $genre['name'] }}</div>
                        <div class="fs-2 text-end">
                            <a href="{{ route('genres.show', ['id' => $genre['id']]) }}" class="stretched-link link-dark text-decoration-none">

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
