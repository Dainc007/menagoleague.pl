<?php

namespace Database\Factories;

use App\Models\League;
use App\Models\User;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Team::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'device' => $this->faker->randomElement(User::AVAILABLE_DEVICES),
            'user_id' => $this->faker->unique()->numberBetween(1,User::count()),
            'league_id' => $this->faker->numberBetween(1,League::count())
        ];
    }
}
