@extends('layouts.base')

@section('content')
    <div class="container p-3">
        <div class="row">
            <div class="col">
                {{ $comics->links() }}
            </div>
        </div>
        <div class="row row-cols-5">
            @foreach ($comics as $comic)
                <div class="col">
                    <div class="p-1" style="height: 100%">
                        <div class="card" style="height: 100%">
                            <img src="{{ $comic->photo }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h1 class="card-title">{{ $comic->title }}</h1>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">{{ $comic->original_title }}</li>
                                <li class="list-group-item">Volume #{{ $comic->volume_n }}</li>
                                <li class="list-group-item">Editor: {{ $comic->editor }}</li>
                                <li class="list-group-item">{{ $comic->author }}</li>
                                <li class="list-group-item">{{ $comic->price }}&euro;</li>
                            </ul>
                            <div class="card-body">
                                <a href="{{ route('comics.show', $comic) }}" class="card-link">Comic link</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col">
                {{ $comics->links() }}
                <a href="{{ route('comics.create') }}" class="btn btn-danger">Add New Comic</a>
            </div>
        </div>
    </div>
@endsection
