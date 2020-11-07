<?php

namespace Tests\Unit;

use App\Models\Duty;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DutyTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_duty_can_be_added()
    {
        $duty = Duty::factory()->create();

        $this->assertDatabaseCount('duties', 1);
    }
}
