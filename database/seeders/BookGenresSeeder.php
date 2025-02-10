<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookGenresSeeder extends Seeder
{
    public function run()
    {
        DB::table('book_genre')->insert([
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
        ]);
    }
}
