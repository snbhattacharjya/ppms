<?php

namespace Tests\Unit;

use App\Models\PoliceStation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PoliceStationTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_police_station_can_be_added()
    {
        $police_station = PoliceStation::factory()->create();

        $this->assertDatabaseCount("police_stations", 1);
    }
}
