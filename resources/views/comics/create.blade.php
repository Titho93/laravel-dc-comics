@extends('layouts.main')

@section('content')
    <h1>Insert New Comics</h1>

    <div class="row">
        <div class="col-8">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Image</label>
                    <input type="text" class="form-control" id="thumb" name="thumb">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" class="form-control" id="type" name="type">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text" class="form-control" id="series" name="series">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date">
                </div>
                <div class="form-floating mb-5">
                    <textarea class="form-control" placeholder="Descrizione" id="description" name="description" style="height: 200px"></textarea>
                    <label for="floatingTextarea2">Description</label>
                </div>

                <button type="submit" class="btn btn-primary">Send</button>
                <button type="reset" class="btn btn-secondary">Retry</button>

            </form>
        </div>
    </div>
@endsection
