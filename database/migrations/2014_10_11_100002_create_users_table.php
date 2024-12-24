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
        Schema::create('users', function (Blueprint $table) {
            $table->id('UserID');
            $table->string('Name', 255)->comment('Имя');
            $table->string('LName', 255)->comment('Фамилия');
            $table->string('FName', 255)->nullable()->comment('Отчество');
            $table->string('Login', 255)->unique()->comment('Логин');
            $table->string('Password', 255)->comment('Пароль');
            $table->unsignedBigInteger('RoleID')->comment('Ссылка на таблицу Role');
            $table->timestamps();

            $table->foreign('RoleID')->references('RoleID')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
