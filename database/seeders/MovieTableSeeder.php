<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies = config('movies.movies');

        foreach ($movies as $movie) {
            Movie::create([
                'title' => $movie['title'],
                'description' => $movie['description'],
                'cast' => $movie['cast'],
                'duration' => $movie['duration'],
                'image' => $movie['image'],
                'director' => $movie['director'],
                'trailer' => $movie['trailer'],
                
            ]);
             
        }
    }
}
