@extends('layouts.admin')

@section('content')
    <h1>film</h1>
    <a href="{{ route('admin.movies.create') }}">Crea nuova sala</a>
    <table>
        <tr>
            
            <th>Title</th>
            <th>Description</th>
            <th>Cast</th>
            <th>Duration</th>
            <th>Image</th>
            <th>Director</th>
            <th>Trailer</th>
            <th>Azioni</th>
        </tr>
        @foreach ($movies as $movie)
        <tr>
            <td>{{ $movie->title }}</td>
            <td>{{ $movie->description }}</td>
            <td>{{ $movie->cast}}</td>
            <td>{{ $movie->duration }}</td>
            <td><img src="{{ $movie->image }}" alt="{{ $movie->name }}" width="100"></td>
            <td>{{ $movie->director }}</td>
            <td>{{ $movie->trailer }}</td>
            <td>
                <a href="{{ route('admin.movies.show', $movie->id) }}">Mostra</a>
                <a href="{{ route('admin.movies.edit', $movie->id) }}">Modifica</a>
                <form action="{{ route('admin.movies.destroy', $movie->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Elimina</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection