<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $table = 'authors';
    protected $primaryKey = 'AuthorID';

    protected $fillable = [
        'Name',     // Имя автора
        'LName',    // Фамилия автора
        'FName',    // Отчество автора
        'Biography',// Биография автора
        'Picture',  // Изображение автора
    ];

    public function books()
    {
        return $this->belongsToMany(Book::class, 'book_author', 'AuthorID', 'BookID');
    }

    public function publications()
    {
        return $this->hasMany(AuthorPublication::class, 'AuthorID', 'AuthorID');
    }
}
