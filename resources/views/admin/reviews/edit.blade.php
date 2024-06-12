@extends('layouts.admin')
@section('content')
    <div class="container">
        <h1>Modifica commenti</h1>
        <form action="{{ route('admin.reviews.update', $review->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="author">author</label>
                <input type="text" id="author" name="author" class="form-control" value="{{ $review->title }}" required>
            </div>
            <div class="form-group">
                <label for="content"></label>
                <input type="text" id="content" name="content" class="form-control" value="{{ $review->title }}" required>
            </div>
            <div class="form-group">
                <label for="rating"></label>
                <input type="string" id="rating" name="rating" class="form-control" value="{{ $review->title }}" >
            </div>
            
            <button type="submit" class="btn btn-primary">Salva modifiche</button>
            <a href="{{ route('admin.reviews.index') }}" class="btn btn-secondary">Annulla</a>
        </form>
    </div>
@endsection