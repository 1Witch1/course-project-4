<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            ['name' => 'Лев', 'lname' => 'Толстой', 'fname' => 'Николаевич', 'biography' => 'Русский писатель, мыслитель.', 'picture' => 'tolstoy.jpg'],
            ['name' => 'Фёдор', 'lname' => 'Достоевский', 'fname' => 'Михайлович', 'biography' => 'Русский писатель, философ.', 'picture' => 'dostoevsky.jpg'],
            ['name' => 'Антон', 'lname' => 'Чехов', 'fname' => 'Павлович', 'biography' => 'Русский писатель, драматург.', 'picture' => 'chekhov.jpg'],
            ['name' => 'Николай', 'lname' => 'Гоголь', 'fname' => 'Васильевич', 'biography' => 'Русский писатель, драматург.', 'picture' => 'gogol.jpg'],
            ['name' => 'Александр', 'lname' => 'Пушкин', 'fname' => 'Сергеевич', 'biography' => 'Русский поэт, драматург.', 'picture' => 'pushkin.jpg'],
            ['name' => 'Иван', 'lname' => 'Тургенев', 'fname' => 'Сергеевич', 'biography' => 'Русский писатель, поэт.', 'picture' => 'turgenev.jpg'],
            ['name' => 'Михаил', 'lname' => 'Лермонтов', 'fname' => 'Юрьевич', 'biography' => 'Русский поэт, прозаик.', 'picture' => 'lermontov.jpg'],
            ['name' => 'Алексей', 'lname' => 'Толстой', 'fname' => 'Николаевич', 'biography' => 'Русский писатель, поэт.', 'picture' => 'alexey_tolstoy.jpg'],
            ['name' => 'Владимир', 'lname' => 'Набоков', 'fname' => 'Владимирович', 'biography' => 'Русский и американский писатель.', 'picture' => 'nabokov.jpg'],
            ['name' => 'Сергей', 'lname' => 'Есенин', 'fname' => 'Александрович', 'biography' => 'Русский поэт.', 'picture' => 'esenin.jpg'],
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}
