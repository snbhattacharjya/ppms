<?php

namespace Tests\Unit;

use App\Models\Trainee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TraineeTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_trainee_can_be_added()
    {
        $trainee = Trainee::factory()->create();

        $this->assertDatabaseCount('trainees', 1);
    }
}
