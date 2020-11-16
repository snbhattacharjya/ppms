<?php

namespace Database\Seeders;

use App\Models\Qualification;
use Illuminate\Database\Seeder;

class QualificationSeeder extends Seeder
{
    protected $qualifications = array(
        array(
            "qualificationcd" => "01",
            "qualification" => "NON-MATRIC/CLASS 8 STANDA",
            "usercode" => 1,
            "posted_date" => "2018-08-20 15:20:38",
        ),
        array(
            "qualificationcd" => "02",
            "qualification" => "MADHYAMIK",
            "usercode" => 1,
            "posted_date" => "2018-08-20 15:20:38",
        ),
        array(
            "qualificationcd" => "03",
            "qualification" => "HIGHER SECONDARY",
            "usercode" => 1,
            "posted_date" => "2018-08-20 15:20:38",
        ),
        array(
            "qualificationcd" => "04",
            "qualification" => "GRADUATE",
            "usercode" => 1,
            "posted_date" => "2018-08-20 15:20:38",
        ),
        array(
            "qualificationcd" => "05",
            "qualification" => "POST GRADUATE",
            "usercode" => 1,
            "posted_date" => "2018-08-20 15:20:38",
        ),
        array(
            "qualificationcd" => "99",
            "qualification" => "Other",
            "usercode" => 1,
            "posted_date" => "2018-08-20 15:20:38",
        ),
    );
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->qualifications as $qualification) {
            Qualification::factory()->create([
                'name' => $qualification['qualification'],
                'code' => $qualification['qualificationcd']
            ]);
        }
    }
}
