<?php

namespace Database\Seeders;

use App\Models\Time;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Time::create([
            'name' => 'Breakfast',
            'name_ru' => 'Завтрак',
            'name_uz' => 'Nonushta'
        ]);

        Time::create([
            'name' => 'Lunch',
            'name_ru' => 'Обед',
            'name_uz' => 'Tushlik'
        ]);

        Time::create([
            'name' => 'Dinner',
            'name_ru' => 'Ужин',
            'name_uz' => 'Kechki ovqat'
        ]);
    }
}
