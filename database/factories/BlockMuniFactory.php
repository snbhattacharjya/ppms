<?php

namespace Database\Factories;

use App\Models\BlockMuni;
use App\Models\Subdivision;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlockMuniFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BlockMuni::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "code"           => $this->faker->unique()->randomNumber(7),
            "name"           => $this->faker->city,
            "subdivision_id" => Subdivision::factory(),
        ];
    }
}
