<?php

namespace Database\Factories;

use App\Models\Competition;
use App\Models\Fixture;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class FixtureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Fixture::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'competition_id' => $this->faker->numberBetween(1, Competition::count()),
            'host_id' => $this->faker->numberBetween(1, Team::count()),
            'visitor_id' => $this->faker->numberBetween(1, Team::count()),
            'host_goals' => $this->faker->numberBetween(0, 4),
            'visitor_goals' => $this->faker->numberBetween(0, 4),
            'date' => $this->faker->dateTimeBetween('-1 years', 'now')
        ];
    }
}
