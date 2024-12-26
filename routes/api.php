<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AuthorPublicationController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Авторизация и регистрация
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// API для книг
Route::middleware('auth:sanctum')->group(function () {
Route::get('/books', [BookController::class, 'index']); // Просмотр всех книг
Route::get('/books/{id}', [BookController::class, 'show']); // Просмотр конкретной книги
});

// API для авторов
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/authors', [AuthorController::class, 'index']); // Просмотр всех авторов
    Route::get('/authors/{id}', [AuthorController::class, 'show']); // Просмотр конкретного автора
});

// API для жанров
Route::middleware('auth:sanctum')->group(function () {
Route::get('/genres', [GenreController::class, 'index']); // Просмотр всех жанров
Route::get('/genres/{id}', [GenreController::class, 'show']); // Просмотр конкретного жанра
});

// API для публикаций авторов
Route::middleware('auth:sanctum')->group(function () {
Route::get('/author-publications', [AuthorPublicationController::class, 'index']); // Просмотр всех публикаций авторов
});
