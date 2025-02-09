<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // Просмотр всех авторов
    public function index()
    {
        $authors = Author::all();  // Получаем всех авторов
        return response()->json($authors);  // Возвращаем всех авторов в формате JSON
    }

    // Просмотр конкретного автора по ID
    public function show($id)
    {
        $author = Author::findOrFail($id);  // Находим автора по ID или возвращаем ошибку
        return response()->json($author);  // Возвращаем автора в формате JSON
    }
}
