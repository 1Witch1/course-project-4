<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookAuthor extends Model
{
    use HasFactory;

    protected $table = 'book_author';
    protected $primaryKey = 'Book_AuthorID';

    protected $fillable = [
        'BookID',   // Ссылка на книгу
        'AuthorID', // Ссылка на автора
    ];

    public function book()
    {
        return $this->belongsTo(Book::class, 'BookID', 'BookID');
    }

    public function author()
    {
        return $this->belongsTo(Author::class, 'AuthorID', 'AuthorID');
    }
}
