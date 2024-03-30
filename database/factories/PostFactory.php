<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(0, 30),
            'title' => fake()->sentence(),
            'description' => fake()->text(),
            'price' => fake()->numberBetween(3000, 20000),
            'type' => fake()->randomElement(['in-person', 'online']),
            'level' => fake()->randomElement(['basic', 'middle', 'advanced']),
            'categories_id' => fake()->numberBetween(1, 7),
            'subcategories_id' => fake()->numberBetween(1, 7),
            'students_acu'
        ];
    }
}
