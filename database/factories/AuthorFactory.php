<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    protected $model = \App\Models\Author::class;
    
    public function definition(): array
    {
        return [
            'name' => $this->faker->name
        ];
    }
}
