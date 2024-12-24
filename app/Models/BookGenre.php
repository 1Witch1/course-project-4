<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookGenre extends Model
{
    use HasFactory;

    protected $table = 'book_genre';
    protected $primaryKey = 'Book_GenreID';

    protected $fillable = [
        'BookID',  // Ссылка на книгу
        'GenreID', // Ссылка на жанр
    ];

    public function book()
    {
        return $this->belongsTo(Book::class, 'BookID', 'BookID');
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'GenreID', 'GenreID');
    }
}
