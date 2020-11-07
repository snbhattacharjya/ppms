<?php

namespace Database\Factories;

use App\Models\Constituency;
use App\Models\ElectionPhase;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConstituencyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Constituency::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $election_phase = ElectionPhase::factory()->create();
        
        return [
            'election_id'       => $election_phase->election_id,
            'election_phase_id' => $election_phase->id
        ];
    }
}
