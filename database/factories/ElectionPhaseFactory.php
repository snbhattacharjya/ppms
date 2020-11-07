<?php

namespace Database\Factories;

use App\Models\Election;
use App\Models\ElectionPhase;
use Illuminate\Database\Eloquent\Factories\Factory;

class ElectionPhaseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ElectionPhase::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'        => 'Phase-'.$this->faker->randomDigit,
            'election_id' => Election::factory()
        ];
    }
}
