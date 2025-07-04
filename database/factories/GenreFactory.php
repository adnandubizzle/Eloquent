<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Genre>
 */
class GenreFactory extends Factory
{
    protected $model=\App\Models\Genre::class;
    public function definition(): array
    {
        return [
            'name'=> $this->faker->word
            
        ];
    }
}
