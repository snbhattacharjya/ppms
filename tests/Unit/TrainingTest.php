<?php

namespace Tests\Unit;

use App\Models\Training;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TrainingTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_training_can_be_added()
    {
        $training = Training::factory()->create();

        $this->assertDatabaseCount('trainings', 1);
    }
}
