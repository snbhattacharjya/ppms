<?php

namespace Database\Factories;

use App\Models\ElectionOfficer;
use App\Models\Trainee;
use App\Models\TrainingSchedule;
use Illuminate\Database\Eloquent\Factories\Factory;

class TraineeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Trainee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $training_schedule = TrainingSchedule::factory()->create();

        return [
            'election_officer_id'  => ElectionOfficer::factory(),
            'code'                 => $this->faker->unique()->phoneNumber,
            'training_id'          => $training_schedule->training_id,
            'training_schedule_id' => $training_schedule->id,
            'room_no'              => 'Room - '.$this->faker->randomDigit,
        ];
    }
}
