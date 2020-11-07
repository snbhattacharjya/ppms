<?php

namespace Database\Factories;

use App\Models\ConstituencyZone;
use App\Models\ElectionPhase;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConstituencyZoneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ConstituencyZone::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'              => 'Zone '.$this->faker->randomDigit,
            'election_phase_id' => ElectionPhase::factory()
        ];
    }
}
