<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $primaryKey = 'book_id';

    protected $fillable = [
        'title',           // Название книги
        'description',     // Описание книги
        'year_of_publication', // Год издания книги
        'picture',         // Изображение
        'genre_id',   // Ссылка на жанры
        'author_id',   // Ссылка на автора
        'publication_id',   // Ссылка на издательство
        'user_id',          // Ссылка на пользователя
    ];

    public function publication()
    {
        return $this->belongsTo(Publication::class, 'publication_id', 'publication_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id', 'genre_id');
    }

    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id', 'author_id');
    }
}
