<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FakeTransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $paymentMethods = ['Bitcoin', 'Ethereum', 'Transfer'];

        return [
            //'payment_method' => $this->faker->boolean() ? 'bitcoin' : 'ethereum',
            'payment_method' => $paymentMethods[rand(0, 2)],
            'type' => $this->faker->boolean() ? 'deposit' : 'withdrawal',
            'name' => $this->faker->name(),
            'amount' => $this->faker->numberBetween($min = 1500, $max = 6000),
        ];
    }
}
