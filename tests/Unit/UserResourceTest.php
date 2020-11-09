<?php

namespace Tests\Unit;

use App\Models\BlockMuni;
use App\Models\District;
use App\Models\Office;
use App\Models\Subdivision;
use App\Models\UserResource;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserResourceTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_an_district_user_resource_can_be_added()
    {
        $user_resource = UserResource::factory()->for(
            District::factory(), 'resource'
        )->create();

        $this->assertDatabaseCount('user_resources', 1);

        $this->assertEquals('App\Models\District', $user_resource->resource_type);
    }
    public function test_an_subdivision_user_resource_can_be_added()
    {
        $user_resource = UserResource::factory()->for(
            Subdivision::factory(), 'resource'
        )->create();

        $this->assertDatabaseCount('user_resources', 1);

        $this->assertEquals('App\Models\Subdivision', $user_resource->resource_type);
    }
    public function test_an_block_muni_user_resource_can_be_added()
    {
        $user_resource = UserResource::factory()->for(
            BlockMuni::factory(), 'resource'
        )->create();

        $this->assertDatabaseCount('user_resources', 1);

        $this->assertEquals('App\Models\BlockMuni', $user_resource->resource_type);
    }
    public function test_an_office_user_resource_can_be_added()
    {
        $user_resource = UserResource::factory()->for(
            Office::factory(), 'resource'
        )->create();

        $this->assertDatabaseCount('user_resources', 1);

        $this->assertEquals('App\Models\Office', $user_resource->resource_type);
    }
}
