<?php

namespace Tests\Unit;

use App\Models\AsmConst;
use App\Models\BlockMuni;
use App\Models\Constituency;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ConstituencyTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_an_assembly_constituency_can_be_added()
    {
        $constituency = Constituency::factory()->for(
            AsmConst::factory(), 'constituent'
        )->create();

        $this->assertDatabaseCount('constituencies', 1);

        $this->assertEquals('App\Models\AsmConst', $constituency->constituent_type);
    }

    public function test_an_blockmuni_constituency_can_be_added()
    {
        $constituency = Constituency::factory()->for(
            BlockMuni::factory(), 'constituent'
        )->create();

        $this->assertDatabaseCount('constituencies', 1);

        $this->assertEquals('App\Models\BlockMuni', $constituency->constituent_type);
    }
}
