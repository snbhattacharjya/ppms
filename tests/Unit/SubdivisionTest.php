<?php

namespace Tests\Unit;

use App\Models\Subdivision;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SubdivisionTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_subdivision_can_be_added()
    {
        $subdivision = Subdivision::factory()->create();

        $this->assertDatabaseCount("subdivisions", 1);

    }
}
