<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Screening;

class ScreeningController extends Controller
{
    public function index()
    {
        
        $screenings = Screening::all();
        dd($screenings);
        return response()->json([
            'status' => 'success',
            'message' => 'Ok',
            'results' => $screenings
        ],200);
    }
}
