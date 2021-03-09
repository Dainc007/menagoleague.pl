<?php

namespace Database\Factories;

use App\Models\Fixture;
use App\Models\GameStats;
use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameStatsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GameStats::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'game_id' => $this->faker->numberBetween(1, Fixture::count()),
            'player_id' => $this->faker->numberBetween(1, Player::count()),
            'apperiance' => $this->faker->boolean(),
            'goals' => $this->faker->numberBetween(0,3),
            'assists' => $this->faker->numberBetween(0,3),
        ];
    }
}
