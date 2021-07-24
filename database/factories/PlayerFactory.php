<?php

namespace Database\Factories;

use App\Models\Player;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Player::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'device_id' => $this->faker->numberBetween(1,3),
            'team_id' => $this->faker->numberBetween(1,Team::count()),
            'nationality' => $this->faker->country,
            'wage' => $this->faker->randomElement([5000,10000,3000,4000,7000,15000]),
            'contract_lenght' => $this->faker->numberBetween(1,5),
            'position' => $this->faker->randomElement(['CM','CB', 'GK', 'ST']),
            'overall' => $this->faker->numberBetween(60,90),
            'age' => $this->faker->numberBetween(17,33),
            'real_team' => $this->faker->company
        ];
    }
}
