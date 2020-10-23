<?php

namespace Database\Factories;

use App\Models\District;
use App\Models\Subdivision;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubdivisionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subdivision::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "code"        => $this->faker->unique()->randomNumber(5),
            "name"        => $this->faker->state,
            "district_id" => District::factory(),
        ];
    }
}
