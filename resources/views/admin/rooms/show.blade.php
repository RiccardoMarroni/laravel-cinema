@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifica Sala</h1>
        <form action="{{ route('admin.rooms.update', $room->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $room->name }}" required>
            </div>
            <div class="form-group">
                <label for="seats_num">Numero di posti:</label>
                <input type="number" id="seats_num" name="seats_num" class="form-control" value="{{ $room->seats_num }}" required>
            </div>
            <div class="form-group">
                <label for="isense">Isense:</label>
                <input type="checkbox" id="isense" name="isense" class="form-check-input" {{ $room->isense ? 'checked' : '' }}>
            </div>
            <div class="form-group">
                <label for="base_price">Prezzo Base:</label>
                <input type="number" id="base_price" name="base_price" class="form-control" step="0.01" value="{{ $room->base_price }}" required>
            </div>
            <div class="form-group">
                <label for="image">Immagine:</label>
                <input type="text" id="image" name="image" class="form-control" value="{{ $room->image }}">
            </div>
            <button type="submit" class="btn btn-primary">Salva modifiche</button>
            <a href="{{ route('admin.rooms.index') }}" class="btn btn-secondary">Annulla</a>
        </form>
    </div>
@endsection