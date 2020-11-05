<?php

namespace Tests\Unit;

use App\Models\PayLevel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PayLevelTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_pay_level_can_be_added()
    {
        $pay_level = PayLevel::factory()->create();

        $this->assertDatabaseCount('pay_levels', 1);
    }
}
