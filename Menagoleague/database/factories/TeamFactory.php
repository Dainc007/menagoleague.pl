<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\User;
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
            'name' => $this->faker->sentence(2,4),
            'device' => $this->faker->randomElement(User::AVAILABLE_DEVICES),
            'user_id' => $this->faker->unique()->numberBetween(1,User::count())
        ];
    }
}
