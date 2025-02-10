<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublicationsSeeder extends Seeder
{
    public function run()
    {
        DB::table('publications')->insert([
            [
                'title' => 'Издательство АСТ',
                'address' => 'Москва, ул. Тверская, 25',
            ],
            [
                'title' => 'Эксмо',
                'address' => 'Москва, ул. Ленинградская, 30',
            ],
            [
                'title' => 'Дрофа',
                'address' => 'Москва, ул. Садовая, 10',
            ],
            [
                'title' => 'Просвещение',
                'address' => 'Москва, ул. Красная, 15',
            ],
            [
                'title' => 'Росмэн',
                'address' => 'Москва, ул. Зеленая, 20',
            ],
            [
                'title' => 'Азбука',
                'address' => 'Санкт-Петербург, ул. Невский проспект, 40',
            ],
            [
                'title' => 'Манн, Иванов и Фербер',
                'address' => 'Москва, ул. Пушкина, 5',
            ],
            [
                'title' => 'Альпина Паблишер',
                'address' => 'Москва, ул. Ленина, 12',
            ],
            [
                'title' => 'Бомбора',
                'address' => 'Москва, ул. Гагарина, 8',
            ],
            [
                'title' => 'Феникс',
                'address' => 'Ростов-на-Дону, ул. Большая Садовая, 50',
            ],
        ]);
    }
}
