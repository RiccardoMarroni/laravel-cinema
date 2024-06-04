@extends('layouts.app')

@section('content')
    <h1>Sale</h1>
    <a href="{{ route('rooms.create') }}">Crea nuova sala</a>
    <table>
        <tr>
            <th>Nome</th>
            <th>Posti</th>
            <th>Isense</th>
            <th>Prezzo Base</th>
            <th>Immagine</th>
            <th>Azioni</th>
        </tr>
        @foreach ($rooms as $room)
        <tr>
            <td>{{ $room->name }}</td>
            <td>{{ $room->seats_num }}</td>
            <td>{{ $room->isense ? 'Sì' : 'No' }}</td>
            <td>{{ $room->base_price }}</td>
            <td><img src="{{ $room->image }}" alt="{{ $room->name }}" width="100"></td>
            <td>
                <a href="{{ route('rooms.show', $room->id) }}">Mostra</a>
                <a href="{{ route('rooms.edit', $room->id) }}">Modifica</a>
                <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Elimina</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection