@extends('layouts.base')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <form action="{{ route('comics.update', $comic->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">

                        @error('title')
                            <div class="alert alert-danger">This field is required.</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="original_title" class="form-label">Original Title</label>
                        <input type="text" class="form-control" id="original_title" name="original_title" value="{{ $comic->original_title }}">
                    </div>
                    <div class="mb-3">
                        <label for="volume_n" class="form-label">Volume Num</label>
                        <input type="number" class="form-control" id="volume_n" name="volume_n" value="{{ $comic->volume_n }}"></textarea>

                        @error('volume_n')
                            <div class="alert alert-danger">This field is required.</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="photo" class="form-label">Photo</label>
                        <input type="text" class="form-control" id="photo" name="photo" value="{{ $comic->photo }}">
                        @error('photo')
                            <div class="alert alert-danger">This field is required.</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="editor" class="form-label">Editor</label>
                        <input type="text" class="form-control" id="editor" name="editor" value="{{ $comic->editor }}">
                    </div>
                        @error('editor')
                            <div class="alert alert-danger">This field is required.</div>
                        @enderror
                    <div class="mb-3">
                        <label for="author" class="form-label">Author</label>
                        <input type="text" class="form-control" id="author" name="author" value="{{ $comic->author }}">
                        @error('author')
                            <div class="alert alert-danger">This field is required.</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{ $comic->price }}">
                        @error('price')
                            <div class="alert alert-danger">This field is required.</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="submit" class="btn btn-warning"><a class="text-decoration-none text-dark" href="{{ route('comics.index') }}">Home</a></button>
                </form>
            </div>
        </div>
    </main>
@endsection
