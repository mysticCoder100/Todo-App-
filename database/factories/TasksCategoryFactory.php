<?php

namespace Database\Factories;

use App\Enums\TaskPriorities;
use App\Models\TasksCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TasksCategory>
 */
class TasksCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => $this->faker->randomDigit(),
            "name" => $this->faker->text(10),
        ];
    }
}
