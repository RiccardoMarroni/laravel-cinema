@extends('layouts.admin')

@section('content')
<h1>commenti</h1>
    <p>{{ $review->description }}</p>
    @if($review->type)
    <p><strong>Tipologia:</strong> {{ $review->type->name }}</p>
    @endif
    
    <p><strong>Tecnologie:</strong>
        @foreach($review->technologies as $technology)
            <span>{{ $technology->name }}</span>@if(!$loop->last), @endif
        @endforeach
    </p>
    @endif
    <br>
    <a href="{{ route('admin.reviews.index') }}" class="btn btn-secondary mt-3">Torna indietro</a>
</div>
@endsection