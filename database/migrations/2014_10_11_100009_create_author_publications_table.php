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
            $table->id('author_publications_id');
            $table->string('title', 255)->comment('Название публикации');
            $table->string('type_of_publication', 255)->comment('Тип публикации');
            $table->date('publication_date')->comment('Дата выхода публикации');
            $table->unsignedBigInteger('author_id')->comment('Ссылка на таблицу Author');
            $table->timestamps();

            $table->foreign('author_id')->references('author_id')->on('authors')->onDelete('cascade');
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
