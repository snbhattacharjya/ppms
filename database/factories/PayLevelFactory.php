<?php

namespace Database\Factories;

use App\Models\PayLevel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class PayLevelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PayLevel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'      => Str::random(5),
            'service'   => Arr::random(['Central','State']),
            'min_basic' => $this->faker->numberBetween(2000,4000),
            'max_basic' => $this->faker->numberBetween(4001,6000),
        ];
    }
}
