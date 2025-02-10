<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookAuthorsSeeder extends Seeder
{
    public function run()
    {
        DB::table('book_author')->insert([
            ['book_id' => 1, 'author_id' => 1],
            ['book_id' => 2, 'author_id' => 2],
            ['book_id' => 3, 'author_id' => 1],
            ['book_id' => 4, 'author_id' => 2],
            ['book_id' => 5, 'author_id' => 3],
            ['book_id' => 6, 'author_id' => 4],
            ['book_id' => 7, 'author_id' => 5],
            ['book_id' => 8, 'author_id' => 6],
            ['book_id' => 9, 'author_id' => 7],
            ['book_id' => 10, 'author_id' => 9],
        ]);
    }
}
