<?php

namespace Database\Seeders;

use App\Models\Election;
use App\Models\State;
use Illuminate\Database\Seeder;

class ElectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $state = State::first();
        Election::factory()->create([
            'name' => 'General Legislative Assembly Election',
            'year' => 2021,
            'state_id' => $state->id,
            'is_active' => true
        ]);
    }
}
