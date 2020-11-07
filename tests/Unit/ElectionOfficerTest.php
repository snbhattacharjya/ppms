<?php

namespace Tests\Unit;

use App\Models\ElectionOfficer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ElectionOfficerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_an_election_officer_can_be_added()
    {
        $election_officer = ElectionOfficer::factory()->create();

        $this->assertDatabaseCount('election_officers', 1);
    }
}
