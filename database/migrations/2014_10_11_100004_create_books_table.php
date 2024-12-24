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
            $table->id('BookID');
            $table->string('Title', 255)->comment('Название книги'); // Название книги
            $table->text('Description')->comment('Описание книги'); // Описание книги
            $table->date('Year_Of_Publication')->comment('Год издания'); // Год издания
            $table->string('Picture', 255)->comment('Обложка'); // Обложка
            $table->unsignedBigInteger('PublicationID')->comment('Ссылка на таблицу Publication');
            $table->unsignedBigInteger('UserID')->comment('Ссылка на таблицу User');
            $table->timestamps();

            $table->foreign('PublicationID')->references('PublicationID')->on('publications')->onDelete('cascade');
            $table->foreign('UserID')->references('UserID')->on('users')->onDelete('cascade');
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
