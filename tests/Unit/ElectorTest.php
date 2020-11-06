<?php

namespace Tests\Unit;

use App\Models\Elector;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ElectorTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $elector = Elector::factory()->create();
        
        $this->assertDatabaseCount('electors', 1);
    }
}
