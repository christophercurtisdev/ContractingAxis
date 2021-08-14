<?php

namespace Database\Factories;

use App\Models\Contract;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContractFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contract::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $return = [
            'title' => $this->faker->words(3, true),
            'description' => $this->faker->realText,
            'expected_duration' => random_int(1, 12) * 30,
            'extendable' => (bool)random_int(0,1),
            'created_by' => random_int(1,100),
            'open' => true
        ];

        $rate_period = random_int(1, 4);
        switch($rate_period) {
            case 1:
                $return['rate'] = random_int(15, 65);
                $return['rate_period'] = 'Hourly';
                break;
            case 2:
                $return['rate'] = random_int(10, 75) * 10;
                $return['rate_period'] = 'Daily';
                break;
            case 3:
                $return['rate'] = random_int(180, 900) * 10;
                $return['rate_period'] = 'Monthly';
                break;
            case 4:
                $return['rate'] = random_int(30, 200) * 1000;
                $return['rate_period'] = 'Yearly';
                break;
        }

        return $return;
    }
}
