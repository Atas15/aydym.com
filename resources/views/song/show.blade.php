@extends('layouts.app')
@section('title')
    Albums
@endsection
@section('content')
    <div class="h3 mb-3">
        Album
    </div>

    <div class="h3 mb-3">
        {{$album->name}}
    </div>

    <table class="table table-striped table-hover table-sm">
        <thead>
        <tr>
            <th>Song ID</th>
            <th>Song Name</th>
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
