@extends('layouts.main')

@section('content')
    <div class="card m-auto" style="width: 20%;">
        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
    </div>
    <div class="card-body text-center p-5">
        <h5 class="card-title">{{ $comic->title }}</h5>
        <p class="card-text">{{ $comic->description }}</p>
    </div>
    <a href="{{ route('comics.index') }}" class="btn btn-danger">Return</a>
@endsection
