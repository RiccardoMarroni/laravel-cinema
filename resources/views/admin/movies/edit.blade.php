@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifica film</h1>
        <form action="{{ route('admin.movies.update', $movie->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="title">titolo</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ $movie->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" id="description" name="description" class="form-control" value="{{ $movie->description }}" required>
            </div>
            <div class="form-group">
                <label for="cast">cast</label>
                <input type="text" id="text" name="text"  class="form-control" {{ $movie->cast }}>
            </div>
            <div class="form-group">
                <label for="duration">Duration:</label>
                <input type="text" id="duration" name="duration" class="form-control" step="0.01" value="{{ $movie->duration }}" required>
            </div>
            <div class="form-group">
                <label for="image">Immagine:</label>
                <input type="text" id="image" name="image" class="form-control" value="{{ $movie->image }}">
            </div>
            <div class="form-group">
                <label for="director">Director:</label>
                <input type="text" id="director" name="director" class="form-control" value="{{ $movie->director }}">
            </div>
            <div class="form-group">
                <label for="trailer">Trailer:</label>
                <input type="text" id="trailer" name="trailer" class="form-control" value="{{ $movie->trailer }}">
            </div>
            <button type="submit" class="btn btn-primary">Salva modifiche</button>
            <a href="{{ route('admin.movies.index') }}" class="btn btn-secondary">Annulla</a>
        </form>
    </div>
@endsection