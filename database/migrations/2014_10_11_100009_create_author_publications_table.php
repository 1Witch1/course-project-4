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
        Schema::create('author_publications', function (Blueprint $table) {
            $table->id('Author_PublicationsID');
            $table->string('Title', 255)->comment('Название публикации');
            $table->string('Type_Of_Publication', 255)->comment('Тип публикации');
            $table->date('Publication_Date')->comment('Дата выхода публикации');
            $table->unsignedBigInteger('AuthorID')->comment('Ссылка на таблицу Author');
            $table->timestamps();

            $table->foreign('AuthorID')->references('AuthorID')->on('authors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('author_publications');
    }
};
