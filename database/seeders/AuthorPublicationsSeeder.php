<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorPublicationsSeeder extends Seeder
{
    public function run()
    {
        DB::table('author_publications')->insert([
            [
                'title' => 'Война и мир',
                'type_of_publication' => 'Роман',
                'publication_date' => '1869-01-01',
                'author_id' => 1,
            ],
            [
                'title' => 'Преступление и наказание',
                'type_of_publication' => 'Роман',
                'publication_date' => '1866-01-01',
                'author_id' => 2,
            ],
            [
                'title' => 'Анна Каренина',
                'type_of_publication' => 'Роман',
                'publication_date' => '1877-01-01',
                'author_id' => 1,
            ],
            [
                'title' => 'Братья Карамазовы',
                'type_of_publication' => 'Роман',
                'publication_date' => '1880-01-01',
                'author_id' => 2,
            ],
            [
                'title' => 'Вишневый сад',
                'type_of_publication' => 'Пьеса',
                'publication_date' => '1904-01-01',
                'author_id' => 3,
            ],
            [
                'title' => 'Ревизор',
                'type_of_publication' => 'Пьеса',
                'publication_date' => '1836-01-01',
                'author_id' => 4,
            ],
            [
                'title' => 'Евгений Онегин',
                'type_of_publication' => 'Роман в стихах',
                'publication_date' => '1833-01-01',
                'author_id' => 5,
            ],
            [
                'title' => 'Отцы и дети',
                'type_of_publication' => 'Роман',
                'publication_date' => '1862-01-01',
                'author_id' => 6,
            ],
            [
                'title' => 'Герой нашего времени',
                'type_of_publication' => 'Роман',
                'publication_date' => '1840-01-01',
                'author_id' => 7,
            ],
            [
                'title' => 'Лолита',
                'type_of_publication' => 'Роман',
                'publication_date' => '1955-01-01',
                'author_id' => 9,
            ],
        ]);
    }
}
