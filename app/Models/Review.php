<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'author', 'content', 'rating', 'movie_id'
    ];

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }

public static function generateSlug($name)
{
    $slug = Str::slug($name, '-');
    $count = 1;
    while (Review::where('slug', $slug)->first()) {
        $slug = Str::of($name)->slug('-') . "-{$count}";
        $count++;
    }
    return $slug;
}
}

/* <?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
} */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name', // ... other project attributes
        'description',
        'image',
        'link',
        'github'
    ];
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function technologies()
    {
        return $this->belongsToMany(Technology::class);
    }
    
}
