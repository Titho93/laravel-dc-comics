@extends('layouts.main')

@section('content')
    <div class="d-flex p-5 ">
        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
        <div class="card-body">
            <h5 class="card-title">{{ $comic->title }}</h5>
            <p class="card-text">{{ $comic->description }}</p>
        </div>
    </div>
@endsection
