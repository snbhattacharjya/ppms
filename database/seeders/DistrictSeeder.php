<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\State;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $districts = array(
        // array(
        //     "districtcd" => "01",
        //     "district" => "COOCHBEHAR",
        //     "usercode" => 1,
        //     "posted_date" => "2018-08-29 06:32:57",
        // ),
        // array(
        //     "districtcd" => "02",
        //     "district" => "JALPAIGURI",
        //     "usercode" => 1,
        //     "posted_date" => "2018-08-29 06:32:57",
        // ),
        array(
            "districtcd" => "03",
            "district" => "DARJEELING",
            "usercode" => 1,
            "posted_date" => "2018-08-29 06:32:57",
        ),
        // array(
        //     "districtcd" => "04",
        //     "district" => "UTTAR DINAJPUR",
        //     "usercode" => 1,
        //     "posted_date" => "2018-08-29 06:32:57",
        // ),
        // array(
        //     "districtcd" => "05",
        //     "district" => "DAKSHIN DINAJPUR",
        //     "usercode" => 1,
        //     "posted_date" => "2018-08-29 06:32:57",
        // ),
        // array(
        //     "districtcd" => "06",
        //     "district" => "MALDAHA",
        //     "usercode" => 1,
        //     "posted_date" => "2018-08-29 06:32:57",
        // ),
        // array(
        //     "districtcd" => "07",
        //     "district" => "MURSHIDABAD",
        //     "usercode" => 1,
        //     "posted_date" => "2018-08-29 06:32:57",
        // ),
        // array(
        //     "districtcd" => "08",
        //     "district" => "NADIA",
        //     "usercode" => 1,
        //     "posted_date" => "2018-08-29 06:32:57",
        // ),
        // array(
        //     "districtcd" => "09",
        //     "district" => "NORTH 24 PARGANAS",
        //     "usercode" => 1,
        //     "posted_date" => "2018-08-29 06:32:57",
        // ),
        // array(
        //     "districtcd" => "10",
        //     "district" => "SOUTH 24 PARGANAS",
        //     "usercode" => 1,
        //     "posted_date" => "2018-08-29 06:32:57",
        // ),
        // array(
        //     "districtcd" => "11",
        //     "district" => "KOLKATA NORTH",
        //     "usercode" => 1,
        //     "posted_date" => "2018-08-29 06:32:57",
        // ),
        // array(
        //     "districtcd" => "12",
        //     "district" => "HOWRAH",
        //     "usercode" => 1,
        //     "posted_date" => "2018-08-29 06:32:57",
        // ),
        // array(
        //     "districtcd" => "13",
        //     "district" => "HOOGHLY",
        //     "usercode" => 1,
        //     "posted_date" => "2018-08-29 06:32:57",
        // ),
        // array(
        //     "districtcd" => "14",
        //     "district" => "PURBA MEDINIPUR",
        //     "usercode" => 1,
        //     "posted_date" => "2018-08-29 06:32:57",
        // ),
        // array(
        //     "districtcd" => "15",
        //     "district" => "PASCHIM MEDINIPUR",
        //     "usercode" => 1,
        //     "posted_date" => "2018-08-29 06:32:57",
        // ),
        // array(
        //     "districtcd" => "16",
        //     "district" => "PURULIA",
        //     "usercode" => 1,
        //     "posted_date" => "2018-08-29 06:32:57",
        // ),
        // array(
        //     "districtcd" => "17",
        //     "district" => "BANKURA",
        //     "usercode" => 1,
        //     "posted_date" => "2018-08-29 06:32:57",
        // ),
        // array(
        //     "districtcd" => "18",
        //     "district" => "PURBA BARDHAMAN",
        //     "usercode" => 1,
        //     "posted_date" => "2018-08-29 06:32:57",
        // ),
        // array(
        //     "districtcd" => "19",
        //     "district" => "BIRBHUM",
        //     "usercode" => 1,
        //     "posted_date" => "2018-08-29 06:32:57",
        // ),
        // array(
        //     "districtcd" => "20",
        //     "district" => "PASCHIM BARDHAMAN",
        //     "usercode" => 1,
        //     "posted_date" => "2018-08-29 06:32:57",
        // ),
        // array(
        //     "districtcd" => "21",
        //     "district" => "ALIPURDUAR",
        //     "usercode" => 1,
        //     "posted_date" => "2018-08-29 06:32:57",
        // ),
        // array(
        //     "districtcd" => "22",
        //     "district" => "JHARGRAM",
        //     "usercode" => 1,
        //     "posted_date" => "2018-08-29 06:32:57",
        // ),
        // array(
        //     "districtcd" => "23",
        //     "district" => "KALIMPONG",
        //     "usercode" => 1,
        //     "posted_date" => "2018-08-29 06:32:57",
        // ),
        // array(
        //     "districtcd" => "24",
        //     "district" => "KOLKATA SOUTH",
        //     "usercode" => 1,
        //     "posted_date" => "2018-08-29 06:32:57",
        // ),
        // array(
        //     "districtcd" => "99",
        //     "district" => "OTHER",
        //     "usercode" => 1,
        //     "posted_date" => "2018-08-31 01:32:36",
        // ),
    );
    
    public function run()
    {
        $state = State::first();
        foreach ($this->districts as $district) {
            District::factory()->create([
                'code' => $district['districtcd'],
                'name' => $district['district'],
                'state_id' => $state->id
            ]);
        }
    }
}
