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
            $table->id('AuthorID');
            $table->string('Name', 255)->comment('Имя автора'); // Имя
            $table->string('LName', 255)->comment('Фамилия автора'); // Фамилия
            $table->string('FName', 255)->nullable()->comment('Отчество автора'); // Отчество
            $table->text('Biography')->comment('Биография'); // Биография
            $table->string('Picture', 255)->nullable()->comment('Изображение автора'); // Изображение
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
