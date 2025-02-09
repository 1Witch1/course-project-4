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
        Schema::create('books', function (Blueprint $table) {
            $table->id('book_id');
            $table->string('title', 255)->comment('Название книги'); // Название книги
            $table->text('description')->comment('Описание книги'); // Описание книги
            $table->date('year_of_publication')->comment('Год издания'); // Год издания
            $table->string('picture', 255)->comment('Обложка'); // Обложка
            $table->unsignedBigInteger('publication_id')->comment('Ссылка на таблицу Publication');
            $table->unsignedBigInteger('user_id')->comment('Ссылка на таблицу User');
            $table->timestamps();

            $table->foreign('publication_id')->references('publication_id')->on('publications')->onDelete('cascade');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
