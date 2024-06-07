<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    
    public function up(): void
{
    Schema::create('reviews', function (Blueprint $table) {
        $table->unsignedBigInteger('movie_id')->nullable()->after('review_id');
        $table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade');
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reviews', function (Blueprint $table) {
                $table->dropForeign('reviews_movie_id_foreing');
                $table->dropColumn('movie_id');

        });
    }
};
