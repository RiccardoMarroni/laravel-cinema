@extends('layouts.admin')

@section('content')
    <h1>aggiungi commento </h1>
    <form action="{{ route('admin.reviews.store') }}" method="POST">
        @csrf
        <!-- <label for="movie_id">film</label>
        <input type="text" id="movie_id" name="movie_id" > -->

        <label for="movie_id" class="form-label">Select Movie</label>
            <select name="review_id" id="movie_id" class="form-control @error('movie_id') is-invalid @enderror">
                <option value="">Select Category</option>
              @foreach ($movies as $movie)
                  <option value="{{$movie->id}}" {{ $movie->id == old('movie_id') ? 'selected' : '' }}>{{$movie->name}}</option>
              @endforeach
            </select>

        <label for="author">autore:</label>
        <input type="text" id="author" name="author" required>
        
        <label for="content">contenuto</label>
        <input type="text" id="content" name="content" required>
        
        <label for="rating">rating film</label>
        <input type="text" id="rating" name="rating" >

        <button type="submit">Crea</button>
    </form>
@endsection