<?php

namespace Database\Seeders;

use App\Models\{Course, Lesson};
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 10; $i++) { 
            $course = Course::factory()->create();
            # code...
            for ($j=1; $j < random_int(2,5); $j++) { 
                # code...
                Lesson::factory()->create(
                    [
                        'order' => $j,
                        "course_id" => $course->id                    ]
                );
            }
        }
    }
}