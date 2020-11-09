<?php

namespace Database\Factories;

use App\Models\District;
use App\Models\Scope;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code'               => Str::random(10),
            'name'               => $this->faker->name,
            'designation'        => $this->faker->jobTitle,
            'email'              => $this->faker->unique()->safeEmail,
            'email_verified_at'  => now(),
            'mobile'             => substr($this->faker->unique()->e164PhoneNumber,2,10),
            'mobile_verified_at' => now(),
            'password'           => Hash::make(env('DEFAULT_PASSWORD', 'paSSw0rd')), // Use Hash function to generate password hash as it varies depending on the hashing configuration on the host
            'remember_token'     => Str::random(10),
        ];
    }
}
