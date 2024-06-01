<?php

namespace Database\Seeders;

use App\Models\{Course, Theme, Lesson, Tag, User};
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $themes = Theme::all();
        $users = User::all();
            
        for ($i=0; $i < 20; $i++) { 
            $theme = $themes->random();
            $course = Course::factory()
                ->create([
                    'theme_id' => $theme->id,
                ]);

            // Attach tags to the course
            $tags = Tag::where('theme_id', $theme->id)->get();
            $course->tags()->attach($tags->random(rand(0, 3)));

            for ($j=1; $j < random_int(2,5); $j++) { 
                Lesson::factory()
                ->hasComments(5, fn () => ['user_id' => $users->random()])
                ->create([
                    'order' => $j,
                    'course_id' => $course->id,
                ]);
            }
        }
    }
}