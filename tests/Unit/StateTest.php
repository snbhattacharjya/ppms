<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\State;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StateTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_state_can_be_added()
    {
        $state = State::factory()->create();

        $this->assertDatabaseCount("states", 1);
    }
}
