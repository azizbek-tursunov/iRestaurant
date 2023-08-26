<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menu = Menu::create([
            'category_id' => rand(1, 4),
            'name' => fake()->name(),
            'about' => fake()->paragraph(),
            'price' => fake()->numberBetween(100000, 500000),
            'image' => 'https://source.unsplash.com/random/200x200?sig=1',
        ]);
    }
}
