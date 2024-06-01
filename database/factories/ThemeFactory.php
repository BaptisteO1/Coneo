<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Theme>
 */
class ThemeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $description = fake()->text(200);
        
        return [
            'thumbnail' => fake()->imageUrl(),
            'excerpt' => Str::limit($description, 95),
            'description' => $description,
        ];
    }
}
