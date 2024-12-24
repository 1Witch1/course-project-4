<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $primaryKey = 'BookID';

    protected $fillable = [
        'Title',           // Название книги
        'Description',     // Описание книги
        'Year_Of_Publication', // Год издания книги
        'Picture',         // Изображение
        'PublicationID',   // Ссылка на издательство
        'UserID',          // Ссылка на пользователя
    ];

    public function publication()
    {
        return $this->belongsTo(Publication::class, 'PublicationID', 'PublicationID');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID', 'UserID');
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'book_genre', 'BookID', 'GenreID');
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class, 'book_author', 'BookID', 'AuthorID');
    }
}
