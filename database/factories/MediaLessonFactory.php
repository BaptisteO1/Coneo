<?php

namespace Database\Factories;

Use App\Models\Lesson;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MediaLesson>
 */
class MediaLessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $media_type = ['image', 'video', 'article'];
        // Sélectionner une lesson existante
        $lesson = Lesson::inRandomOrder()->first();

        return [
            'media_type' => fake()->randomElement($media_type),
            'url' => fake()->imageUrl(),
            'description' => fake()->text(),
            'lesson_id' => $lesson->id,
        ];
    }
}
