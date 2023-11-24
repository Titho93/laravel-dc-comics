@extends('layouts.main')

@section('content')
    <h1 class="p-3">Comics list</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Series</th>
                <th scope="col">Sale Date</th>
                <th scope="col">Type</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{ $comic->id }}</td>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>
                        <a href="{{ route('comics.show', $comic) }}" class="btn btn-secondary"><i
                                class="fa-solid fa-info"></i></a>
                        <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning"><i
                                class="fa-solid fa-pen-to-square text-white"></i></a>
                        <form action="{{ route('comics.destroy', $comic) }}" method="POST" class="d-inline-block"
                            onsubmit='return confirm("Are you sure?")'>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-x"></i></button>
                        </form>
                    </td>


                </tr>
            @endforeach


        </tbody>
    </table>
@endsection
