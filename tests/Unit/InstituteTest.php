<?php

namespace Tests\Unit;

use App\Models\Institute;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class InstituteTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $institute = Institute::factory()->create();
        
        $this->assertDatabaseCount("institutes", 1);
    }
}
