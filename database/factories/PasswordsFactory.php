<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PasswordsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(), // Assuming you have a User model
            'uri' => $this->faker->url,
            'website' => $this->faker->text(50),
            'username' => $this->faker->userName,
            'password' => $this->faker->password, // You might want to customize this based on your requirements
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
