<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Office;
use App\Models\PayLevel;
use App\Models\Qualification;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = Arr::random(['M', 'F', 'O']);
        $groups = ['A', 'B', 'C', 'D'];

        return [
            'office_id'        => Office::factory(),
            'name'             => $this->faker->name($gender),
            'designation'      => $this->faker->jobTitle,
            'gender'           => $gender,
            'dob'              => $this->faker->date(),
            'mobile'           => substr($this->faker->unique()->e164PhoneNumber,2,10),
            'basic_pay'        => $this->faker->numberBetween(2000,5000),
            'pay_level_id'     => PayLevel::factory(),
            'group'            => Arr::random($groups),
            'qualification_id' => Qualification::factory()

        ];
    }
}
