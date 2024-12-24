<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorPublication extends Model
{
    use HasFactory;

    protected $table = 'author_publications';
    protected $primaryKey = 'Author_PublicationsID';

    protected $fillable = [
        'Title',           // Название публикации
        'Type_Of_Publication', // Тип публикации
        'Publication_Date', // Дата публикации
        'AuthorID',        // Ссылка на автора
    ];

    public function author()
    {
        return $this->belongsTo(Author::class, 'AuthorID', 'AuthorID');
    }
}
