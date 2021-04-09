<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence($this->faker->numberBetween(3, 6)),
            'content' => $this->faker->text($this->faker->numberBetween(250, 1000)),
            'device'  => $this->faker->randomElement(User::AVAILABLE_DEVICES)
        ];
    }
}
