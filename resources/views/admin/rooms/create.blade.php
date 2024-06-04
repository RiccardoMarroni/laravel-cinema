@extends('layouts.app')

@section('content')
    <h1>Crea nuova sala</h1>
    <form action="{{ route('admin.rooms.store') }}" method="POST">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>
        <label for="seats_num">Numero di posti:</label>
        <input type="number" id="seats_num" name="seats_num" required>
         <label for="isense">Isense:</label>
        <input type="checkbox" id="isense" name="isense" value="1"> 
        <label for="base_price">Prezzo Base:</label>
        <input type="number" id="base_price" name="base_price" step="0.01" required>
         <label for="image">Immagine:</label>
        <input type="text" id="image" name="image"> 
        <button type="submit">Crea</button>
    </form>
@endsection