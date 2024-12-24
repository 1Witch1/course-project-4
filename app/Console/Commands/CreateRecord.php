<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\{Book, Author, Genre, Publication, AuthorPublication};

class CreateRecord extends Command
{
    // Название команды
    protected $signature = 'create:record {model}';

    // Описание команды
    protected $description = 'Создание записей для различных моделей';

    public function handle()
    {
        $model = $this->argument('model');

        switch ($model) {
            case 'book':
                $this->createBook();
                break;
            case 'author':
                $this->createAuthor();
                break;
            case 'genre':
                $this->createGenre();
                break;
            case 'publication':
                $this->createPublication();
                break;
            case 'author-publication':
                $this->createAuthorPublication();
                break;
            default:
                $this->error("Модель $model не поддерживается.");
        }
    }

    protected function createBook()
    {
        $title = $this->ask('Название книги');
        $description = $this->ask('Описание книги');
        $year = $this->ask('Год издания (YYYY-MM-DD)');
        $publicationId = $this->ask('ID издательства');
        $userId = $this->ask('ID пользователя');

        Book::create([
            'Title' => $title,
            'Description' => $description,
            'Year_Of_Publication' => $year,
            'PublicationID' => $publicationId,
            'UserID' => $userId,
        ]);

        $this->info('Книга успешно создана.');
    }

    protected function createAuthor()
    {
        $name = $this->ask('Имя автора');
        $lname = $this->ask('Фамилия автора');
        $fname = $this->ask('Отчество (можно оставить пустым)');
        $biography = $this->ask('Биография');
        $picture = $this->ask('Ссылка на изображение');

        Author::create([
            'Name' => $name,
            'LName' => $lname,
            'FName' => $fname,
            'Biography' => $biography,
            'Picture' => $picture,
        ]);

        $this->info('Автор успешно создан.');
    }

    protected function createGenre()
    {
        $style = $this->ask('Название жанра');

        Genre::create([
            'Style' => $style,
        ]);

        $this->info('Жанр успешно создан.');
    }

    protected function createPublication()
    {
        $title = $this->ask('Название издательства');
        $address = $this->ask('Адрес издательства');

        Publication::create([
            'Title' => $title,
            'Address' => $address,
        ]);

        $this->info('Издательство успешно создано.');
    }

    protected function createAuthorPublication()
    {
        $title = $this->ask('Название публикации');
        $type = $this->ask('Тип публикации');
        $date = $this->ask('Дата публикации (YYYY-MM-DD)');
        $authorId = $this->ask('ID автора');

        AuthorPublication::create([
            'Title' => $title,
            'Type_Of_Publication' => $type,
            'Publication_Date' => $date,
            'AuthorID' => $authorId,
        ]);

        $this->info('Публикация автора успешно создана.');
    }
}
