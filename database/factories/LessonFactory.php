<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->unique()->sentence();
        $content = fake()->paragraphs(4, true);
        $date = fake()->dateTimeBetween('-1 year');

        // Récupérer un cours aléatoire
        $course = Course::inRandomOrder()->first();       

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'excerpt' => Str::limit($content, 100),
            'content' => $content,
            'order' => fake()->numberBetween(1, 4),
            'course_id' => $course->id,
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}
