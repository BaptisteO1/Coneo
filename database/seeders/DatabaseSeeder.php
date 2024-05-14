<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ThemeSeeder::class,
            CategorySeeder::class,
            CourseSeeder::class,
            LessonSeeder::class,
            UserProgressionSeeder::class,
            MediaLessonSeeder::class,
        ]);
    }
}
