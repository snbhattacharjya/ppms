<?php

namespace Tests\Unit;

use App\Models\ParlConst;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ParlConstTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_parl_const_can_be_added()
    {
        $parl_const = ParlConst::factory()->create();

        $this->assertDatabaseCount("parl_consts", 1);
    }
}
