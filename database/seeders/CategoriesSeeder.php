<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => '🍳Завтрак / Kahvaltı',
        ]);

        Category::create([
            'name' => '🥗Салат / Salata',
        ]);

        Category::create([
            'name' => '🍟Гарнир / Garnitür',
        ]);

        Category::create([
            'name' => '🍜Супы / Çorbalar',
        ]);

        Category::create([
            'name' => '🍛Вторые блюда из мяса / Et yemekleri',
        ]);

        Category::create([
            'name' => '🍢Турецкие шашлыки / Kebaplar',
        ]);

        Category::create([
            'name' => '🥩 Стейк / Biftek',
        ]);

        Category::create([
            'name' => '🍕Пиццы, Пиде / Pizza, Pide',
        ]);

        Category::create([
            'name' => '🍞Хлеб / Ekmek',
        ]);

        Category::create([
            'name' => '🍰Десерт / Tatlılar',
        ]);
    }
}
