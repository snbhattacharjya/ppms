<?php

namespace Tests\Unit;

use App\Models\PollingStation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PollingStationTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_polling_station_can_be_added()
    {
        $polling_station = PollingStation::factory()->create();

        $this->assertDatabaseCount('polling_stations', 1);
    }
}
