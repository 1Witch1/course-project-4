<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            ['style' => 'Роман'],
            ['style' => 'Детектив'],
            ['style' => 'Поэзия'],
            ['style' => 'Фантастика'],
            ['style' => 'Исторический'],
            ['style' => 'Драма'],
            ['style' => 'Комедия'],
            ['style' => 'Трагедия'],
            ['style' => 'Биография'],
            ['style' => 'Научная литература'],
        ];

        foreach ($genres as $genre) {
            Genre::create($genre);
        }
    }
}
