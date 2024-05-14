<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Category 1',
            'slug' => 'category-1',
            'thumbnail' => 'image 1',
            'theme_id' => 1,
        ]);

        Category::create([
            'name' => 'Category 2',
            'slug' => 'category-2',
            'thumbnail' => 'image 2',
            'theme_id' => 1,
        ]);

        Category::create([
            'name' => 'Category 3',
            'slug' => 'category-3',
            'thumbnail' => 'image 3',
            'theme_id' => 2,
        ]);
    }
}
