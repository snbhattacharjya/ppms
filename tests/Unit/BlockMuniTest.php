<?php

namespace Tests\Unit;

use App\Models\BlockMuni;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BlockMuniTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_block_muni_can_be_added()
    {
        $block_muni = BlockMuni::factory()->create();

        $this->assertDatabaseCount("block_munis", 1);
    }
}
