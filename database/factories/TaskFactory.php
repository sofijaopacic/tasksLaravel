<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'description' => $this->faker->realText,
            'due_date' => $this->faker->date,
            'finished' => $this->faker->boolean(20),
            'task_type_id' => $this->faker->numberBetween(1, 8),
            'employee_id' => $this->faker->numberBetween(1, 15)
        ];
    }
}
