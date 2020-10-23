<?php

namespace Tests\Unit;

use App\Models\District;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DistrictTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_a_district_can_be_added()
    {
        $state = District::factory()->create();

        $this->assertDatabaseCount("districts", 1);
    }
}
