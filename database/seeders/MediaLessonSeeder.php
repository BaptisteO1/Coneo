<?php

namespace Database\Seeders;

use App\Models\MediaLesson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MediaLessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MediaLesson::Factory(10)->create();
    }
}
