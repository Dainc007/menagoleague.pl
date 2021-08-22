<?php

namespace Database\Factories;

use App\Models\Finance;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class FinanceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Finance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'team_id' => $this->faker->numberBetween(1, 200),
            'type' => $this->faker->randomElement(Finance::AVAILABLE_TYPES),
            'title' => $this->faker->sentence(4),
            'money_before' => $this->faker->numberBetween(999999, 99999999),
            'price' => $this->faker->numberBetween(9999, 999999),
            'money_after' => $this->faker->numberBetween(999999, 99999999),
        ];
    }
}
