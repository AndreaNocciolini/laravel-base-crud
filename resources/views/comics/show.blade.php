@extends('layouts.base')

@section('content')
    <ul>
        <li>{{ $comic->title }}</li>
        <li>{{ $comic->original_title }}</li>
        <li>{{ $comic->volume_n }}</li>
        <li><img src="{{ $comic->photo }}" alt=""></li>
        <li>{{ $comic->editor }}</li>
        <li>{{ $comic->author }}</li>
        <li>{{ $comic->description }}</li>
        <li>{{ $comic->price }}</li>
    </ul>
@endsection