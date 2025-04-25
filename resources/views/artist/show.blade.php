@extends('layouts.app')
@section('title')
    Artists
@endsection
@section('content')
    <div class="h3 mb-3">
        Artist
    </div>

    <div class="h3 mb-3">
        {{$artist->name}}
    </div>

    <table class="table table-striped table-hover table-sm">
        <thead>
        <tr>
            <th>Album ID</th>
            <th>Album Name</th>
            <th>Songs</th>
        </tr>
        </thead>
        <tbody>
        @foreach($albums as $album)
            <tr>
                <td>{{ $album->id }}</td>
                <td>{{ $album->name }}</td>
                <td>
                    <a href="" class="btn btn-light btn-sm">
                        {{$album->songs_count}}
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
