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
        $contain = fake()->paragraphs(4, true);
        $date = fake()->dateTimeBetween('-1 year');

        // Récupérer un cours aléatoire
        $course = Course::inRandomOrder()->first();

        // TODO faire en sorte qu'il y ai un ordre dans les lessons (sans doublon)
        // Vérifier le nombre de leçons associées à ce cours
        //$lessonCount = $course->lessons()->count();
        // Limiter le nombre de leçons à 4
        //$order = ($lessonCount % 4) + 1;
        

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'excerpt' => Str::limit($contain, 100),
            'contain' => $contain,
            'order' => fake()->numberBetween(1, 4),
            'course_id' => $course->id,
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}
