<?php

namespace Tests\Unit;

use App\Models\TrainingVenue;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TrainingVenueTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_training_venue_can_be_added()
    {
        $training_venue = TrainingVenue::factory()->create();

        $this->assertDatabaseCount('training_venues', 1);
    }
}
