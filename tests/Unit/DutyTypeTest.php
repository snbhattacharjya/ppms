<?php

namespace Tests\Unit;

use App\Models\DutyType;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DutyTypeTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_duty_type_can_be_added()
    {
        $duty_type = DutyType::factory()->create();

        $this->assertDatabaseCount('duty_types', 1);
    }
}
