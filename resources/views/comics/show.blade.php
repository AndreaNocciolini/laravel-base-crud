@extends('layouts.base')

@section('content')
    <ul>
        <li>{{ $comic->title }}</li>
        <li>{{ $comic->original_title }}</li>
        <li>{{ $comic->volume_n }}</li>
        <li><img src="{{ $comic->photo }}" alt=""></li>
        <li>{{ $comic->editor }}</li>
        <li>{{ $comic->author }}</li>
        <li>{{ $comic->price }}</li>
        <li><a href="{{ route('comics.index') }}">Return</a></li>
        <li><a href="{{ route('comics.edit', $comic->id) }}">Edit</a></li>
    </ul>
@endsection