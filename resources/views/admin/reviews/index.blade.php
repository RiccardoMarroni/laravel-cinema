@extends('layouts.app')

@section('content')
    <a href="{{ route('admin.reviews.create') }}">Crea nuova sala</a>
    @foreach ($reviews as $review)
    <table>
            <td>
                <a href="{{ route('admin.reviews.show', $review->id) }}">Mostra</a>
                <a href="{{ route('admin.reviews.edit', $review->id) }}">Modifica</a>
                <form action="{{ route('admin.reviews.destroy', $review->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Elimina</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection