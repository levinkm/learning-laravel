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
            'category_id' => $this->faker->numberBetween(1, 3),
            'user_id' => $this->faker->numberBetween(1, 10),
            'title' => $this->faker->sentence(),
            'excerpt' => $this->faker->paragraph(1),
            'body' => $this->faker->paragraph(8),

        ];
    }
}
