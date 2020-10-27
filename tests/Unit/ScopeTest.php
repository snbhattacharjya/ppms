<?php

namespace Tests\Unit;

use App\Models\Scope;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ScopeTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_district_scope_can_be_added()
    {
        $scope = Scope::factory()->create();

        $this->assertDatabaseCount('scopes', 1);
    }
}
