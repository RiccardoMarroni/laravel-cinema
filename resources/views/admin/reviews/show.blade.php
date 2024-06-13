@extends('layouts.admin')

@section('content')
<h1>commenti</h1>
    <p>{{ $review->author }}</p>
  
    <p><strong>contenuto</strong> {{ $review->content }}</p>
   
    <p><strong>rating</strong> {{ $review->rating }}</p>
    
    
    <br>
    <a href="{{ route('admin.reviews.index') }}" class="btn btn-secondary mt-3">Torna indietro</a>
</div>
@endsection

