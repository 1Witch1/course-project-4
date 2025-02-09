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
        Schema::create('book_genre', function (Blueprint $table) {
            $table->id('book_genre_id');
            $table->unsignedBigInteger('book_id')->comment('Ссылка на таблицу Book');
            $table->unsignedBigInteger('genre_id')->comment('Ссылка на таблицу Genre');
            $table->timestamps();

            $table->foreign('book_id')->references('book_id')->on('books')->onDelete('cascade');
            $table->foreign('genre_id')->references('genre_id')->on('genres')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_genre');
    }
};
