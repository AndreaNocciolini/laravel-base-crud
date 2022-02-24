@extends('layouts.base')

@section('content')
    {{-- <ul>
        <li>{{ $comic->title }}</li>
        <li>{{ $comic->original_title }}</li>
        <li>{{ $comic->volume_n }}</li>
        <li><img src="{{ $comic->photo }}" alt=""></li>
        <li>{{ $comic->editor }}</li>
        <li>{{ $comic->author }}</li>
        <li>{{ $comic->price }}</li>
        <li><a href="{{ route('comics.index') }}">Return</a></li>
        <li><a href="{{ route('comics.edit', $comic->id) }}">Edit</a></li>
    </ul> --}}

    <div class="row w-100">
        <div class="col p-3 d-flex justify-content-center align-items-center w-100">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <h5 class="card-title">{{ $comic->original_title }}</h5>
                    <img src="{{ $comic->photo }}" class="card-img-top" alt="...">
                    <h5 class="card-title">{{ $comic->volume_n }}</h5>
                    <h5 class="card-title">{{ $comic->editor }}</h5>
                    <h5 class="card-title">{{ $comic->author }}</h5>
                    <h5 class="card-title">{{ $comic->price }}</h5>
                    <a class="card-title text-decoration-none text-white btn btn-danger" href="{{ route('comics.index') }}">Return</a>
                    <a class="card-title text-decoration-none text-dark btn btn-warning" href="{{ route('comics.edit', $comic->id) }}">Edit</a>
                </div>
            </div>
        </div>
    </div>
@endsection
