@extends('layouts.app')

@section('content')
    <h1>Sale</h1>
    <a href="{{ route('admin.review.create') }}">Crea nuova sala</a>
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