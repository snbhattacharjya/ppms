<?php

namespace Database\Factories;

use App\Models\ElectionOfficer;
use App\Models\ElectionPhase;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class ElectionOfficerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ElectionOfficer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $election_phase = ElectionPhase::factory()->create();
        return [
            'employee_id'       => Employee::factory(),
            'code'              => $this->faker->unique()->randomNumber(),
            'election_id'       => $election_phase->election_id,
            'election_phase_id' => $election_phase->id
        ];
    }
}
