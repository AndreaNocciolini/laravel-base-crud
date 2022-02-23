@extends('layouts.base')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <form action="{{ route('comics.store') }}" method="post">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="original_title" class="form-label">Original Title</label>
                        <input type="text" class="form-control" id="original_title" name="original_title">
                    </div>
                    <div class="mb-3">
                        <label for="volume_n" class="form-label">Volume Num</label>
                        <input type="number" class="form-control" id="volume_n" name="volume_n"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="photo" class="form-label">Photo</label>
                        <input type="text" class="form-control" id="photo" name="photo">
                    </div>
                    <div class="mb-3">
                        <label for="editor" class="form-label">Editor</label>
                        <input type="text" class="form-control" id="editor" name="editor">
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Author</label>
                        <input type="text" class="form-control" id="author" name="author">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price">
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </main>
@endsection
