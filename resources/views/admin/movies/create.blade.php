@extends('layouts.app')

@section('content')
    <h1>aggiungi film </h1>
    <form action="{{ route('admin.movies.store') }}" method="POST">
        @csrf
        <label for="title">titolo:</label>
        <input type="text" id="title" name="title" required>
        <label for="description">descrizione del film</label>
        <input type="text" id="description" name="description" required>
         <label for="cast">cast</label>
        <input type="text" id="cast" name="cast"> 
        <label for="duration">durata</label>
        <input type="text" id="duration" name="duration" required>
         <label for="image">Immagine:</label>
        <input type="text" id="image" name="image"> 
        <label for="director">director:</label>
        <input type="text" id="director" name="director">
        <label for="trailer">trailer:</label>
        <input type="text" id="trailer" name="trailer">
        <button type="submit">Crea</button>
    </form>
@endsection