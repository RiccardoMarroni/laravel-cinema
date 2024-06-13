@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.reviews.store') }}" method="POST">
        @csrf
        <label for="author">autore:</label>
        <input type="text" id="author" name="author" required>
        
        <label for="content">contenuto</label>
        <input type="text" id="content" name="content" required>
        
        <label for="rating">rating film</label>
        <input type="text" id="rating" name="rating" >     
    </form>
@endsection