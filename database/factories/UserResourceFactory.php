<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\UserResource;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserResourceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserResource::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory()
        ];
    }
}
