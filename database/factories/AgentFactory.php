<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AgentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'account_name' => $this->faker->word(),
            'western_union_link' => $this->faker->word(),
            'bank' => $this->faker->word(),
            'account_number' => $this->faker->randomNumber(),
            'phone_number' => $this->faker->phoneNumber(),
        ];
    }
}
