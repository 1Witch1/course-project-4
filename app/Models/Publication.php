<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $table = 'publications';
    protected $primaryKey = 'publication_id';

    protected $fillable = [
        'title',   // Название издательства
        'address', // Адрес издательства
    ];

    public function books()
    {
        return $this->hasMany(Book::class, 'publication_id', 'publication_id');
    }
}
