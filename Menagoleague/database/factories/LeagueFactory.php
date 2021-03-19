<?php

namespace Database\Factories;

use App\Models\League;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeagueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = League::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'region' => $this->faker->unique()->randomElement(League::AVAILABLE_REGIONS),
            'level' => 1/* $this->faker->randomElement(League::AVAILABLE_LEVELS) */,
        ];
    }
}
