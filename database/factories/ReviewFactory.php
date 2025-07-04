<?php

namespace Database\Factories;
use App\Models\Book;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
        protected $model = \App\Models\Review::class;

    public function definition(): array
    {
          return [
            'book_id' => Book::factory(),
            'user_id' => User::factory(),
            'content' => $this->faker->paragraph,
            'rating' => $this->faker->numberBetween(1, 5),
        ];
    }
}
