<?php

namespace Tests\Unit;

use App\Models\AsmConst;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AsmConstTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_asm_const_can_be_added()
    {
        $asm_const = AsmConst::factory()->create();

        $this->assertDatabaseCount("asm_consts", 1);
    }
}
