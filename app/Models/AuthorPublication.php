<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorPublication extends Model
{
    use HasFactory;

    protected $table = 'author_publications';
    protected $primaryKey = 'author_publications_id';

    protected $fillable = [
        'title',           // Название публикации
        'type_of_publication', // Тип публикации
        'publication_date', // Дата публикации
        'author_id',        // Ссылка на автора
    ];

    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id', 'author_id');
    }
}
