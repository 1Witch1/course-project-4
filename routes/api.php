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

Route::post('/register', [AuthController::class, 'register']); // Регистрация
Route::post('/login', [AuthController::class, 'login']); // Авторизация

// Маршруты для книг, авторов и жанров доступны всем авторизованным
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/books', [BookController::class, 'index']); // Просмотр всех книг
    Route::get('/books/{id}', [BookController::class, 'show']); // Просмотр конкретной книги

    Route::get('/authors', [AuthorController::class, 'index']); // Просмотр всех авторов
    Route::get('/authors/{id}', [AuthorController::class, 'show']); // Просмотр конкретного автора

    Route::get('/genres', [GenreController::class, 'index']); // Просмотр всех жанров
    Route::get('/genres/{id}', [GenreController::class, 'show']); // Просмотр конкретного жанра

    Route::get('/author-publications', [AuthorPublicationController::class, 'index']); // Публикации
    Route::get('/author-publications/{id}', [AuthorPublicationController::class, 'show']); // Просмотр конкретной публикации
});

// Административные маршруты
Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::post('/books', [BookController::class, 'store']); // Добавление книги
    Route::put('/books/{id}', [BookController::class, 'update']); // Редактирование книги
    Route::delete('/books/{id}', [BookController::class, 'destroy']); // Удаление книги

    Route::post('/authors', [AuthorController::class, 'store']); // Добавление автора
    Route::put('/authors/{id}', [AuthorController::class, 'update']); // Редактирование автора
    Route::delete('/authors/{id}', [AuthorController::class, 'destroy']); // Удаление автора

    Route::post('/genres', [GenreController::class, 'store']); // Добавление жанра
    Route::put('/genres/{id}', [GenreController::class, 'update']); // Редактирование жанра
    Route::delete('/genres/{id}', [GenreController::class, 'destroy']); // Удаление жанра

    Route::post('/author-publications', [AuthorPublicationController::class, 'store']); // Добавление публикации
    Route::put('/author-publications/{id}', [AuthorPublicationController::class, 'update']); // Редактирование публикации
    Route::delete('/author-publications/{id}', [AuthorPublicationController::class, 'destroy']); // Удаление публикации
});
