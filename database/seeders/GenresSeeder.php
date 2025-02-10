<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresSeeder extends Seeder
{
    public function run()
    {
        DB::table('genres')->insert([
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
        ]);
    }
}
