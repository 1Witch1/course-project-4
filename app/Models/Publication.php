<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $table = 'publications';
    protected $primaryKey = 'PublicationID';

    protected $fillable = [
        'Title',   // Название издательства
        'Address', // Адрес издательства
    ];

    public function books()
    {
        return $this->hasMany(Book::class, 'PublicationID', 'PublicationID');
    }
}