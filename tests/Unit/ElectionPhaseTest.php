<?php

namespace Tests\Unit;

use App\Models\ElectionPhase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ElectionPhaseTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $election_phase = ElectionPhase::factory()->create();

        $this->assertDatabaseCount('election_phases', 1);
    }
}
