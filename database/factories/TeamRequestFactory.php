<?php

namespace Database\Factories;

use App\Models\TeamRequest;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamRequestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TeamRequest::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => random_int(1, 100),
            'team_id' => random_int(1, 20),
            'message' => $this->faker->realText
        ];
    }
}
