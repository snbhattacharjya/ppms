<?php

namespace Tests\Unit;

use App\Models\TrainingSchedule;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TrainingScheduleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_training_schedule_can_be_added()
    {
        $training_schedule = TrainingSchedule::factory()->create();

        $this->assertDatabaseCount('training_schedules', 1);
    }
}
