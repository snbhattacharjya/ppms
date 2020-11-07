<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\Employee;
use App\Models\State;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employee_id' => Employee::factory(),
            'address'     => $this->faker->address,
            'state_id'    => State::factory(),
            'pincode'     => $this->faker->randomNumber(6),
            'phone'       => $this->faker->phoneNumber,
            'email'       => $this->faker->email
        ];
    }
}
