<?php

namespace Database\Factories;

use App\Enums\TaskPriorities;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "tasks_category_id" => $this->faker->randomDigit(),
            "name" => $this->faker->text(10),
            "description" => $this->faker->text(30),
            "due_date" => $this->faker->date(),
            "priority" => TaskPriorities::Medium,
        ];
    }
}
