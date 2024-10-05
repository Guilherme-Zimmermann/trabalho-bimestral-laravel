<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'position' => $this->faker->jobTitle,
            'education' => $this->faker->randomElement(['Ensino Fundamental', 'Ensino Médio', 'Ensino Superior']),
        ];
    }
}

