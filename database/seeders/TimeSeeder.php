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
        ]);

        Time::create([
            'name' => 'Lunch',
        ]);

        Time::create([
            'name' => 'Dinner',
        ]);
    }
}
