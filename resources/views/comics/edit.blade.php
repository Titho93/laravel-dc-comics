@extends('layouts.main')

@section('content')
    <h1>Edit {{ $comic->title }}</h1>

    <div class="row">
        <div class="col-8">
            <form action="{{ route('comics.update', $comic) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value='{{ $comic->title }}'>
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Image</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value='{{ $comic->thumb }}'>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" name="type" value='{{ $comic->type }}'>
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series" value='{{ $comic->series }}'>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value='{{ $comic->price }}'>
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date"
                        value='{{ $comic->sale_date }}'>
                </div>
                <div class="form-floating mb-5">
                    <textarea class="form-control" placeholder="Description" id="description" name="description" style="height: 200px"></textarea>
                    <label for="floatingTextarea2">Description</label value='{{ $comic->description }}'>
                </div>

                <button type="submit" class="btn btn-warning">Send</button>
            </form>
        </div>
    </div>
@endsection
