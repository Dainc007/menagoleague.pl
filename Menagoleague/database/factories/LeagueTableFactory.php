<?php

namespace Database\Factories;

use App\Models\Competition;
use App\Models\LeagueTable;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeagueTableFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LeagueTable::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'competition_id' => $this->faker->numberBetween(1, Competition::count()),
            'team_id' => $this->faker->numberBetween(1, Team::count())
        ];
    }
}
