<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'seat_num',
        'isense',
        'base_price',
        'image',
        'slug'
    ]; 


public static function generateSlug($name)
{
    $slug = Str::slug($name, '-');
    $count = 1;
    while (room::where('slug', $slug)->first()) {
        $slug = Str::of($name)->slug('-') . "-{$count}";
        $count++;
    }
    return $slug;
}
}

