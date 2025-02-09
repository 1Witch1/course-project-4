<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            ['title' => 'Война и мир', 'description' => 'Роман о войне и любви.', 'year_of_publication' => '1869-01-01', 'picture' => 'war_and_peace.jpg', 'publication_id' => 1, 'user_id' => 1],
            ['title' => 'Преступление и наказание', 'description' => 'Роман о преступлении и морали.', 'year_of_publication' => '1866-01-01', 'picture' => 'crime_and_punishment.jpg', 'publication_id' => 2, 'user_id' => 2],
            ['title' => 'Анна Каренина', 'description' => 'Роман о любви и обществе.', 'year_of_publication' => '1877-01-01', 'picture' => 'anna_karenina.jpg', 'publication_id' => 1, 'user_id' => 1],
            ['title' => 'Братья Карамазовы', 'description' => 'Роман о вере и сомнении.', 'year_of_publication' => '1880-01-01', 'picture' => 'brothers_karamazov.jpg', 'publication_id' => 2, 'user_id' => 2],
            ['title' => 'Вишневый сад', 'description' => 'Пьеса о социальных изменениях.', 'year_of_publication' => '1904-01-01', 'picture' => 'cherry_orchard.jpg', 'publication_id' => 3, 'user_id' => 3],
            ['title' => 'Ревизор', 'description' => 'Пьеса о коррупции.', 'year_of_publication' => '1836-01-01', 'picture' => 'revizor.jpg', 'publication_id' => 4, 'user_id' => 4],
            ['title' => 'Евгений Онегин', 'description' => 'Роман в стихах о любви.', 'year_of_publication' => '1833-01-01', 'picture' => 'evgeny_onegin.jpg', 'publication_id' => 5, 'user_id' => 5],
            ['title' => 'Отцы и дети', 'description' => 'Роман о конфликте поколений.', 'year_of_publication' => '1862-01-01', 'picture' => 'fathers_and_sons.jpg', 'publication_id' => 6, 'user_id' => 6],
            ['title' => 'Герой нашего времени', 'description' => 'Роман о личности и обществе.', 'year_of_publication' => '1840-01-01', 'picture' => 'hero_of_our_time.jpg', 'publication_id' => 7, 'user_id' => 7],
            ['title' => 'Лолита', 'description' => 'Роман о запретной любви.', 'year_of_publication' => '1955-01-01', 'picture' => 'lolita.jpg', 'publication_id' => 9, 'user_id' => 9],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
