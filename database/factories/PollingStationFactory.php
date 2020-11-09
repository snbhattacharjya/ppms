<?php

namespace Database\Factories;

use App\Models\AsmConst;
use App\Models\Constituency;
use App\Models\PollingStation;
use Illuminate\Database\Eloquent\Factories\Factory;

class PollingStationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PollingStation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $constituency = Constituency::factory()->for(
            AsmConst::factory(), 'constituent'
        )->create();

        return [
            'name'            => $this->faker->company,
            'election_id'     => $constituency->election_id,
            'constituency_id' => $constituency->id,
        ];
    }
}
