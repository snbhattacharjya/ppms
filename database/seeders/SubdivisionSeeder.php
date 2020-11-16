<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\Subdivision;
use Illuminate\Database\Seeder;

class SubdivisionSeeder extends Seeder
{
    protected $subdivisions = array(
        array(
            "subdivisioncd" => "0301",
            "districtcd" => "03",
            "subdivision" => "MIRIK",
            "usercode" => 1,
            "posted_date" => "2018-09-24 16:48:46",
        ),
        array(
            "subdivisioncd" => "0302",
            "districtcd" => "03",
            "subdivision" => "DARJEELING",
            "usercode" => 1,
            "posted_date" => "2018-09-24 16:48:46",
        ),
        array(
            "subdivisioncd" => "0303",
            "districtcd" => "03",
            "subdivision" => "KURSEONG",
            "usercode" => 1,
            "posted_date" => "2018-09-24 16:48:46",
        ),
        array(
            "subdivisioncd" => "0304",
            "districtcd" => "03",
            "subdivision" => "SILIGURI",
            "usercode" => 1,
            "posted_date" => "2018-09-24 16:48:46",
        ),
    );
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $district = District::first();
        foreach ($this->subdivisions as $subdivision) {
            Subdivision::factory()->create([
                'code' => $subdivision['subdivisioncd'],
                'name' => $subdivision['subdivision'],
                'district_id' => $district->id
            ]);
        }
    }
}
