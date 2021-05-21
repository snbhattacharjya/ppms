<?php

namespace Database\Factories;

use App\Models\AsmConst;
use App\Models\BlockMuni;
use App\Models\Category;
use App\Models\District;
use App\Models\Institute;
use App\Models\Office;
use App\Models\PoliceStation;
use App\Models\Subdivision;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfficeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Office::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $male_staff = $this->faker->randomNumber(2);
        $female_staff = $this->faker->randomNumber(2);

        return [
            'name'              => $this->faker->company,
            'hod_designation'   => $this->faker->jobTitle,
            'address'           => $this->faker->address,
            'post_office'       => $this->faker->streetName,
            'pincode'           => $this->faker->randomNumber(6),
            'district_id'       => District::factory(),
            'subdivision_id'    => Subdivision::factory(),
            'block_muni_id'     => BlockMuni::factory(),
            'police_station_id' => PoliceStation::factory(),
            'asm_const_id'      => AsmConst::factory(),
            'category_id'       => Category::factory(),
            'institute_id'      => Institute::factory(),
            'phone'             => (int)substr($this->faker->unique()->e164PhoneNumber,2,10),
            'fax'               => (int)substr($this->faker->unique()->e164PhoneNumber,2,10),
            'email'             => $this->faker->unique()->companyEmail,
            'hod_mobile'        => (int)substr($this->faker->unique()->e164PhoneNumber,2,10),
            'total_staff'       => $male_staff + $female_staff,
            'male_staff'        => $male_staff,
            'female_staff'      => $female_staff,
        ];
    }
}
