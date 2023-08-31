<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Azizbek',
            'email' => 'admin@mail.com',
            'password' => '$2y$10$ZYLgLx5w6N74pPgjlUnjSOmgIFEPayFLHpfqjz9fsrb5OJX2S1LUy',
        ]);
    }
}
