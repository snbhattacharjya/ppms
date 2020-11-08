<?php

namespace Database\Factories;

use App\Models\BlockMuni;
use App\Models\TrainingVenue;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrainingVenueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TrainingVenue::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $block_muni = BlockMuni::factory()->create();

        return [
            'name'           => $this->faker->company,
            'district_id'    => $block_muni->subdivision->district_id,
            'subdivision_id' => $block_muni->subdivision_id,
            'block_muni_id'  => $block_muni->id,
            'address'        => $this->faker->address,
            'pincode'        => $this->faker->randomNumber(6),
            'capacity'       => $this->faker->randomNumber(3)
        ];
    }
}
