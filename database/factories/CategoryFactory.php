<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Category::class;

    public function definition()
    {
        dd($model);

        return [
        'title' => $this->faker->sentence(3),
        'slug' => $this->faker->paragraph(3),
        'description' => $this->faker->paragraph(),
        'meta_title' => $this->faker->sentence(),
        'meta_description' => $this->faker->paragraph(),
        'status' => $this->faker->randomElement(['active','inactive']),
        ];
    }
}
