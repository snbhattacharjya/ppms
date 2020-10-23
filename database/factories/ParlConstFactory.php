<?php

namespace Database\Factories;

use App\Models\ParlConst;
use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParlConstFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ParlConst::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "code"     => $this->faker->randomNumber(3),
            "name"     => $this->faker->streetName,
            "state_id" => State::factory(),
        ];
    }
}
