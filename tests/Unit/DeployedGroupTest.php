<?php

namespace Tests\Unit;

use App\Models\DeployedGroup;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DeployedGroupTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_deployed_group_can_be_added()
    {
        $deployed_group = DeployedGroup::factory()->create();

        $this->assertDatabaseCount('deployed_groups', 1);
    }
}
