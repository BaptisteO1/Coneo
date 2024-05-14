<?php

namespace Database\Seeders;

use \App\Models\Theme;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Theme::create([
            'name' => 'Theme 1',
            'slug' => 'theme-1',
            'thumbnail' => 'image 1',
        ]);

        Theme::create([
            'name' => 'Theme 2',
            'slug' => 'theme-2',
            'thumbnail' => 'image 2',
        ]);
    }
}
