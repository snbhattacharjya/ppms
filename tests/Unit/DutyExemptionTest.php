<?php

namespace Tests\Unit;

use App\Models\DutyExemption;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DutyExemptionTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_duty_exemption_can_be_added()
    {
        $duty_exemption = DutyExemption::factory()->create();

        $this->assertDatabaseCount('duty_exemptions', 1);
    }
}
