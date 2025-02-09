<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BookGenre;

class BookGenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bookGenres = [
            ['book_id' => 1, 'genre_id' => 1],
            ['book_id' => 2, 'genre_id' => 1],
            ['book_id' => 3, 'genre_id' => 1],
            ['book_id' => 4, 'genre_id' => 1],
            ['book_id' => 5, 'genre_id' => 2],
            ['book_id' => 6, 'genre_id' => 2],
            ['book_id' => 7, 'genre_id' => 3],
            ['book_id' => 8, 'genre_id' => 1],
            ['book_id' => 9, 'genre_id' => 1],
            ['book_id' => 10, 'genre_id' => 1],
        ];

        foreach ($bookGenres as $bookGenre) {
            BookGenre::create($bookGenre);
        }
    }
}
