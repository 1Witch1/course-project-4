<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $table = 'genres';
    protected $primaryKey = 'genre_id';

    protected $fillable = [
        'style',  // Название жанра
    ];

    public function books()
    {
        return $this->hasMany(Book::class, 'genre_id', 'genre_id');
    }
}
