<?php

namespace Database\Seeders;

use App\Models\Chef;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChefsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chef::create([
            'name' => fake()->name(),
            'about' => fake()->paragraph(),
            'image' => 'https://source.unsplash.com/random/200x200?sig=1',
        ]);

        Chef::create([
            'name' => fake()->name(),
            'about' => fake()->paragraph(),
            'image' => 'https://source.unsplash.com/random/200x200?sig=1',
        ]);

        Chef::create([
            'name' => fake()->name(),
            'about' => fake()->paragraph(),
            'image' => 'https://source.unsplash.com/random/200x200?sig=1',
        ]);
    }
}
