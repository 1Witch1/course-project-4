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
            $table->id('Book_GenreID');
            $table->unsignedBigInteger('BookID')->comment('Ссылка на таблицу Book');
            $table->unsignedBigInteger('GenreID')->comment('Ссылка на таблицу Genre');
            $table->timestamps();

            $table->foreign('BookID')->references('BookID')->on('books')->onDelete('cascade');
            $table->foreign('GenreID')->references('GenreID')->on('genres')->onDelete('cascade');
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
