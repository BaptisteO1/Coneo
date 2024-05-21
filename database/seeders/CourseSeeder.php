<?php

namespace Database\Seeders;

use App\Models\{Course, Theme, Lesson, Tag};
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
            $theme = $themes->random();
            $course = Course::factory()
                ->create([
                    'theme_id' => $theme->id,
                ]);

            // Attach tags to the course
            $tags = Tag::where('theme_id', $theme->id)->get();
            $course->tags()->attach($tags->random(rand(1, 3)));

            for ($j=1; $j < random_int(2,5); $j++) { 
                Lesson::factory()->create([
                    'order' => $j,
                    'course_id' => $course->id,
                ]);
            }
        }
    }
}