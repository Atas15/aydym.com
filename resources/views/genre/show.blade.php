@extends('layouts.app')
@section('title')
    Genres
@endsection
@section('content')
    <div class="h3 mb-3">
        Genre
    </div>

{{--    <div class="h3 mb-3">--}}
{{--        {{$genre->name}}--}}
{{--    </div>--}}

    <table class="table table-striped table-hover table-sm">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($songs as $song)
            <tr>
                <td>{{ $song->id }}</td>
                <td>{{ $song->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
