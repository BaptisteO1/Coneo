<?php

namespace Database\Factories;

use App\Models\Theme;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {   
        $title = fake()->unique()->sentence(2);
        $description = fake()->text(200);
        $date = fake()->dateTimeBetween('-1 year');
        // Sélectionner une catégorie existante
        $theme = Theme::inRandomOrder()->first();

        return [
            'title' => Str::limit($title),
            'theme_id' => $theme->id,
            'slug' => Str::slug($title),
            'thumbnail' => fake()->imageUrl(),
            'excerpt' => Str::limit($description, 95),
            'description' => $description,
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}
