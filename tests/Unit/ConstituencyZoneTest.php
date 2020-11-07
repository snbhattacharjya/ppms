<?php

namespace Tests\Unit;

use App\Models\ConstituencyZone;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ConstituencyZoneTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_constituency_zone_can_be_added()
    {
        $const_zone = ConstituencyZone::factory()->create();

        $this->assertDatabaseCount('constituency_zones', 1);
    }
}
