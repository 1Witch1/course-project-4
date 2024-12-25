<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $table = 'authors';
    protected $primaryKey = 'author_id';

    protected $fillable = [
        'name',     // Имя автора
        'lname',    // Фамилия автора
        'fname',    // Отчество автора
        'biography',// Биография автора
        'picture',  // Изображение автора
    ];

    public function books()
    {
        return $this->belongsToMany(Book::class, 'book_author', 'author_id', 'book_id');
    }

    public function publications()
    {
        return $this->hasMany(AuthorPublication::class, 'author_id', 'author_id');
    }
}
