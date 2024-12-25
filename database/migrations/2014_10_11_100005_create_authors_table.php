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
        Schema::create('authors', function (Blueprint $table) {
            $table->id('author_id');
            $table->string('name', 255)->comment('Имя автора'); // Имя
            $table->string('lname', 255)->comment('Фамилия автора'); // Фамилия
            $table->string('fname', 255)->nullable()->comment('Отчество автора'); // Отчество
            $table->text('biography')->comment('Биография'); // Биография
            $table->string('picture', 255)->nullable()->comment('Изображение автора'); // Изображение
            $table->timestamps(); // Метки времени
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authors');
    }
};
