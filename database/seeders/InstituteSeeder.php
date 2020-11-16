<?php

namespace Database\Seeders;

use App\Models\Institute;
use Illuminate\Database\Seeder;

class InstituteSeeder extends Seeder
{
    protected $institutes = array(
        array(
            "institutecd" => "01",
            "institute" => "Department/Directorate/Other subordinate Govt. Office",
            "usercode" => 1,
            "posted_date" => "2013-12-26 17:44:00",
        ),
        array(
            "institutecd" => "02",
            "institute" => "Railways",
            "usercode" => 1,
            "posted_date" => "2014-01-22 19:11:40",
        ),
        array(
            "institutecd" => "03",
            "institute" => "BSNL",
            "usercode" => 1,
            "posted_date" => "2014-01-22 19:11:40",
        ),
        array(
            "institutecd" => "04",
            "institute" => "Bank",
            "usercode" => 1,
            "posted_date" => "2014-01-22 19:11:40",
        ),
        array(
            "institutecd" => "05",
            "institute" => "LIC/GIC/Other Insurance Institution",
            "usercode" => 1,
            "posted_date" => "2014-01-22 19:11:40",
        ),
        array(
            "institutecd" => "06",
            "institute" => "Income Tax/Customs/Other Revenue Collection Authority",
            "usercode" => 1,
            "posted_date" => "2014-01-22 19:11:40",
        ),
        array(
            "institutecd" => "07",
            "institute" => "Primary School",
            "usercode" => 1,
            "posted_date" => "2014-01-22 19:11:40",
        ),
        array(
            "institutecd" => "08",
            "institute" => "Secondary/Higher Secondary School",
            "usercode" => 1,
            "posted_date" => "2014-01-22 19:11:40",
        ),
        array(
            "institutecd" => "09",
            "institute" => "College",
            "usercode" => 1,
            "posted_date" => "2014-01-22 19:11:40",
        ),
        array(
            "institutecd" => "10",
            "institute" => "University",
            "usercode" => 1,
            "posted_date" => "2014-01-22 19:11:40",
        ),
        array(
            "institutecd" => "11",
            "institute" => "Water/Electricity Supply",
            "usercode" => 1,
            "posted_date" => "2014-01-22 19:11:40",
        ),
        array(
            "institutecd" => "12",
            "institute" => "Panchayat Body",
            "usercode" => 1,
            "posted_date" => "2014-01-22 19:11:40",
        ),
        array(
            "institutecd" => "13",
            "institute" => "Municipal Body",
            "usercode" => 1,
            "posted_date" => "2014-01-22 19:11:40",
        ),
        array(
            "institutecd" => "14",
            "institute" => "Other Within District",
            "usercode" => 1,
            "posted_date" => "2014-01-22 19:11:40",
        ),
        array(
            "institutecd" => "15",
            "institute" => "Others Outside District",
            "usercode" => 1,
            "posted_date" => "2018-08-20 14:58:33",
        ),
    );
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->institutes as $institute) {
            Institute::factory()->create([
                'name' => $institute['institute'],
                'code' => $institute['institutecd']
            ]);
        }
    }
}
