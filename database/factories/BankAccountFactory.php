<?php

namespace Database\Factories;

use App\Models\BankAccount;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BankAccountFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BankAccount::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employee_id'     => Employee::factory(),
            'ifsc_code'       => Str::random(11),
            'bank_account_no' => $this->faker->unique()->bankAccountNumber
        ];
    }
}
