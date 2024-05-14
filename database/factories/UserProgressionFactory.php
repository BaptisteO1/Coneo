<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Progression>
 */
class UserProgressionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Sélectionner un score aléatoire parmi 25, 50, 75 ou 100
        $score = fake()->randomElement([25, 50, 75, 100]);
        $date = fake()->dateTimeBetween('-1 year');

        // Sélectionner un utilisateur et un cours existant
        $user = User::inRandomOrder()->first();
        $course = Course::inRandomOrder()->first();

        return [
            'user_id' => $user->id,
            'course_id' => $course->id,
            'score' => $score,
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}
