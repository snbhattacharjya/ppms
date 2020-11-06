<?php

namespace Database\Factories;

use App\Models\AsmConst;
use App\Models\BlockMuni;
use App\Models\Elector;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class ElectorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Elector::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employee_id'        => Employee::factory(),
            'epic'               => $this->faker->unique()->randomNumber(),
            'part_no'            => $this->faker->randomNumber(3),
            'sl_no'              => $this->faker->randomNumber(4),
            'temp_asm_const_id'  => AsmConst::factory(),
            'perm_asm_const_id'  => AsmConst::factory(),
            'duty_asm_const_id'  => AsmConst::factory(),
            'temp_block_muni_id' => BlockMuni::factory(),
            'perm_block_muni_id' => BlockMuni::factory(),
            'duty_block_muni_id' => BlockMuni::factory(),

        ];
    }
}
