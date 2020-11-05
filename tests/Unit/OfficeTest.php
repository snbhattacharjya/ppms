<?php

namespace Tests\Unit;

use App\Models\Office;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OfficeTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_office_can_be_added()
    {
        $office = Office::factory()->create();

        $this->assertDatabaseCount('offices',1);
    }
}
