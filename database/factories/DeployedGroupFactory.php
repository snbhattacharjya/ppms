<?php

namespace Database\Factories;

use App\Models\AsmConst;
use App\Models\Constituency;
use App\Models\DeployedGroup;
use App\Models\ElectionOfficer;
use App\Models\PollingStation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class DeployedGroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DeployedGroup::class;

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
            'election_officer_id' => ElectionOfficer::factory()->create([
                                        'election_id'       => $constituency->election_id,
                                        'election_phase_id' => $constituency->election_phase_id]),

            'constituency_id'     => $constituency->id,
            'group_no'            => $this->faker->randomDigitNot(0),
            'party_reserve'       => Arr::random(['P','R']),
            'polling_station_id'  => PollingStation::factory()->create([
                                        'election_id'     => $constituency->election_id,
                                        'constituency_id' => $constituency->id])
        ];
    }
}
