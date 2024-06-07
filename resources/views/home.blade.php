@extends('layouts.app')

@section('content')
    <h1>film</h1>
    <a href="{{ route('admin.movies.index') }}"></a>
    <table>
        <tr>
            <th>Title</th>
            <th>Image</th>  
        </tr>
         @foreach ($movies as $movie)
        <tr>
            <td>{{ $movie->title }}</td>
            <td><img src="{{ $movie->image }}" alt="{{ $movie->name }}" width="100"></td>
            <td>
               
               
            </td>
        </tr>
        @endforeach  
    </table>
@endsection