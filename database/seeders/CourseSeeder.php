<?php

namespace Database\Seeders;

use App\Models\{Course, Theme, Lesson};
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $themes = Theme::all();
            
        for ($i=0; $i < 20; $i++) { 
            $course = Course::factory()
                ->sequence(fn () => [
                    'theme_id' => $themes->random(),
                ])
                ->create();
            for ($j=1; $j < random_int(2,5); $j++) { 
                Lesson::factory()->create(
                    [
                        'order' => $j,
                        "course_id" => $course->id                    ]
                );
            }
        }
    }
}