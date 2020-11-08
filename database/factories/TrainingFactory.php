<?php

namespace Database\Factories;

use App\Models\Election;
use App\Models\ElectionPhase;
use App\Models\Training;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class TrainingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Training::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'title'             => $this->faker->text(),
            'type'              => Arr::random(['Individual','Group']),
            'election_id'       => Election::factory(),
        ];
    }
}
