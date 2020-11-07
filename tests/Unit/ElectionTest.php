<?php

namespace Tests\Unit;

use App\Models\Election;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ElectionTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $election = Election::factory()->create();

        $this->assertDatabaseCount('elections', 1);
    }
}
