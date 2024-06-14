<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return response()->json([
   
            'success' => true,
           
            'results'=> $movies
            ]);
    }

    public function show($slug)
    {
        $movie = Movie::where('slug', $slug)->first();
        if($movie){
            return response()->json([
                'status' => 'success',
                'message' => 'Ok',
                'results' => $movie
            ],200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Error'
            ],404);
        }
        
    }
}
