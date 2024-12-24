<?php

namespace App\Http\Controllers;

use App\Models\AuthorPublication;
use Illuminate\Http\Request;

class AuthorPublicationController extends Controller
{
    // Просмотр всех публикаций авторов
    public function index()
    {
        $authorPublications = AuthorPublication::with(['author'])->get();  // Подгружаем автора
        return response()->json($authorPublications);  // Возвращаем все публикации авторов в формате JSON
    }

    // Просмотр конкретной публикации автора по ID
    public function show($id)
    {
        $authorPublication = AuthorPublication::with(['author'])->findOrFail($id);  // Подгружаем автора
        return response()->json($authorPublication);  // Возвращаем публикацию автора в формате JSON
    }
}
