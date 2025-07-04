<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Author;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
   protected $model= \App\Models\Book::class;
    public function definition(): array
    {
       return [
            'title' => $this->faker->sentence(3),
            'author_id' => Author::factory(),
            'user_id' => User::factory(),
            'published_at' => $this->faker->dateTimeBetween('-2 years', 'now'),
            'is_published' => $this->faker->boolean(80),
        ];
    }
}
