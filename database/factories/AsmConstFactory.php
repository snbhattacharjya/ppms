<?php

namespace Database\Factories;

use App\Models\AsmConst;
use App\Models\District;
use App\Models\ParlConst;
use Illuminate\Database\Eloquent\Factories\Factory;

class AsmConstFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AsmConst::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "code"          => $this->faker->randomNumber(3),
            "name"          => $this->faker->stateAbbr,
            "parl_const_id" => ParlConst::factory(),
            "district_id"   => District::factory(),
        ];
    }
}
