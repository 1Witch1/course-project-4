<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Просмотр всех книг
    public function index()
    {
        $books = Book::with(['publication', 'user'])->get();  // Подгружаем связанные данные
        return response()->json($books);  // Возвращаем все книги в формате JSON
    }

    // Просмотр конкретной книги по ID
    public function show($id)
    {
        $book = Book::with(['publication', 'user'])->findOrFail($id);  // Подгружаем связанные данные
        return response()->json($book);  // Возвращаем книгу в формате JSON
    }
}
