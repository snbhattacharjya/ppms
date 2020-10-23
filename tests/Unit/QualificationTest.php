<?php

namespace Tests\Unit;

use App\Models\Qualification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class QualificationTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_qualification_can_be_added()
    {
        $qualification = Qualification::factory()->create();
        
        $this->assertDatabaseCount("qualifications", 1);
    }
}
