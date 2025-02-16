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
            $table->id('user_id');
            $table->string('name', 255)->comment('Имя');
            $table->string('lname', 255)->comment('Фамилия');
            $table->string('fname', 255)->nullable()->comment('Отчество');
            $table->string('login', 255)->unique()->comment('Логин');
            $table->string('password', 255)->comment('Пароль');
            $table->unsignedBigInteger('role_id')->comment('Ссылка на таблицу Role');
            $table->timestamps();

            $table->foreign('role_id')->references('role_id')->on('roles')->onDelete('cascade');
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
