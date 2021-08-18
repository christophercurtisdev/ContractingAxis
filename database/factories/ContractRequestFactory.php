<?php

namespace Database\Factories;

use App\Models\ContractRequest;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContractRequestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ContractRequest::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => random_int(1, 100),
            'contract_id' => random_int(51, 100)
        ];
    }
}
