<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'login' => $this->faker->unique()->name,
            //'email' => $this->faker->unique()->safeEmail,
            //'email_verified_at' => now(),
            'password' => $this->faker->word, // password
            //'remember_token' => Str::random(10),
        ];
    }
}
