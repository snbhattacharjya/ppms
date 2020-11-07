<?php

namespace Database\Factories;

use App\Models\Duty;
use App\Models\DutyType;
use Illuminate\Database\Eloquent\Factories\Factory;

class DutyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Duty::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'         => 'Presiding Officer',
            'code'         => 'PR',
            'duty_type_id' => DutyType::factory()
        ];
    }
}
