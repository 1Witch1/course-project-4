<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    // Просмотр всех жанров
    public function index()
    {
        $genres = Genre::all();  // Получаем все жанры
        return response()->json($genres);  // Возвращаем все жанры в формате JSON
    }

    // Просмотр конкретного жанра по ID
    public function show($id)
    {
        $genre = Genre::findOrFail($id);  // Находим жанр по ID или возвращаем ошибку
        return response()->json($genre);  // Возвращаем жанр в формате JSON
    }
}
