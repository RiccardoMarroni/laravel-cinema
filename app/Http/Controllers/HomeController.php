<?php

namespace App\Http\Controllers;
Use App\Http\Controllers\Admin\MovieController;
use Illuminate\Http\Request;
Use App\Models\Movie;

class HomeController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }
}