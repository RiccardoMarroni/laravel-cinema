<?php
namespace App\Http\Controllers\Admin;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMovieRequest;


class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('admin.movies.index', compact('movies'));
    }

    public function create()
    {
        return view('admin.movies.create');
    }

    public function store(StoreMovieRequest $request)
    {
         
        $form_data = $request->validated();

        $new_movie = Movie::create($form_data);
        return redirect()->route('admin.movies.index')->with('success', 'Movie created successfully.');
    }

    public function show(Movie $movie)
    {
        return view('admin.movies.show', compact('movie'));
    }

    public function edit(Movie $movie)
    {
        
        return view('admin.movies.edit', compact('movie'));
    }

    public function update(Request $request, Movie $movie)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'description' => 'required|string',
            'cast' => 'nullable|string',
            'duration' => 'required|string',
            'image' => 'nullable|string',
            'director' => 'nullable|string',
            'trailer' => 'nullable|string',
            
        ]);

        $movie->update($request->all());
        return redirect()->route('admin.movies.index')->with('success', 'Movie updated successfully.');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('admin.movies.index')->with('success', 'Movie deleted successfully.');
    }
}