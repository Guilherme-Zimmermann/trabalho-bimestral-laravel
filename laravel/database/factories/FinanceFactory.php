<?php
namespace Database\Factories;

use App\Models\Finance;
use Illuminate\Database\Eloquent\Factories\Factory;

class FinanceFactory extends Factory
{
    protected $model = Finance::class;

    public function definition()
    {
        return [
            'description' => $this->faker->sentence,
            'value' => $this->faker->randomFloat(2, 10, 1000),
            'type' => $this->faker->randomElement(['receber', 'pagar']),
        ];
    }
}
