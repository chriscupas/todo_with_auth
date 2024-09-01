<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Todo;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Todo>
 */
class TodoFactory extends Factory
{
    protected $model = Todo::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tasks' => $this->faker->word(3),
        ];
    }
}
