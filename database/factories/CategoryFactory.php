<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word,  // Certifique-se que está gerando um nome
            'description' => $this->faker->sentence,
            'image' => '/images/' . $this->faker->numberBetween(1, 10) . '.jpeg',
        ];
    }
}