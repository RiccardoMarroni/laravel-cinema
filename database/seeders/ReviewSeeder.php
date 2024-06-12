<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = config("reviews.reviews");
        foreach ($reviews as $review){
            Review::create([
            'author' => $review['author'],
            'content' => $review['content'],
            'rating' => $review['rating'],
            ]);
        }
    }
}
