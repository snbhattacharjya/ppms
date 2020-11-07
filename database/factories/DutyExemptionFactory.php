<?php

namespace Database\Factories;

use App\Models\DutyExemption;
use App\Models\ElectionOfficer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class DutyExemptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DutyExemption::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'election_officer_id' => ElectionOfficer::factory(),
            'reason'              => $this->faker->text(),
            'applied_by'          => User::factory(),
            'processed_by'        => User::factory(),
            'status'              => Arr::random(['P','A','R']),
            'remarks'             => $this->faker->text()
        ];
    }
}
