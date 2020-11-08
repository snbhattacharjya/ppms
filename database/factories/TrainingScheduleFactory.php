<?php

namespace Database\Factories;

use App\Models\Training;
use App\Models\TrainingSchedule;
use App\Models\TrainingVenue;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrainingScheduleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TrainingSchedule::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'training_id'       => Training::factory(),
            'training_venue_id' => TrainingVenue::factory(),
            'date'              => $this->faker->date,
            'time'              => $this->faker->time(),
            'total_rooms'       => $this->faker->randomDigit
        ];
    }
}
