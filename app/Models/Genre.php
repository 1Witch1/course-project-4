<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $table = 'genres';
    protected $primaryKey = 'GenreID';

    protected $fillable = [
        'Style',  // Название жанра
    ];

    public function books()
    {
        return $this->belongsToMany(Book::class, 'book_genre', 'GenreID', 'BookID');
    }
}
