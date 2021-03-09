<?php

namespace Database\Factories;

use App\Models\Competition;
use App\Models\Model;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamCompetitionsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Competition::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'team_id' => $this->faker->numberBetween(1,Team::count()),
            'competition_id' => $this->faker->numberBetween(1,Competition::count()),
        ];
    }
}
