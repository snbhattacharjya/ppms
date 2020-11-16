<?php

namespace Database\Seeders;

use App\Models\PoliceStation;
use Illuminate\Database\Seeder;

class PoliceStationSeeder extends Seeder
{
    protected $policestations = array(
        array(
            "policestationcd" => "030101",
            "policestation" => "MIRIK",
            "subdivisioncd" => "0301",
            "usercode" => 1,
            "posted_date" => "2018-09-24 16:51:03",
        ),
        array(
            "policestationcd" => "030201",
            "policestation" => "DARJEELING(SADAR)",
            "subdivisioncd" => "0302",
            "usercode" => 1,
            "posted_date" => "2018-09-24 16:51:03",
        ),
        array(
            "policestationcd" => "030202",
            "policestation" => "JOREBUNGLOW",
            "subdivisioncd" => "0302",
            "usercode" => 1,
            "posted_date" => "2018-09-24 16:51:03",
        ),
        array(
            "policestationcd" => "030203",
            "policestation" => "LODHAMA",
            "subdivisioncd" => "0302",
            "usercode" => 1,
            "posted_date" => "2018-09-24 16:51:03",
        ),
        array(
            "policestationcd" => "030205",
            "policestation" => "PULBAZAR",
            "subdivisioncd" => "0302",
            "usercode" => 1,
            "posted_date" => "2018-09-24 16:51:03",
        ),
        array(
            "policestationcd" => "030206",
            "policestation" => "RANGLI-RANGLIOT",
            "subdivisioncd" => "0302",
            "usercode" => 1,
            "posted_date" => "2018-09-24 16:51:03",
        ),
        array(
            "policestationcd" => "030207",
            "policestation" => "SUKHIAPOKHARI",
            "subdivisioncd" => "0302",
            "usercode" => 1,
            "posted_date" => "2018-09-24 16:51:03",
        ),
        array(
            "policestationcd" => "030301",
            "policestation" => "KURSEONG",
            "subdivisioncd" => "0303",
            "usercode" => 1,
            "posted_date" => "2018-09-24 16:51:03",
        ),
        array(
            "policestationcd" => "030401",
            "policestation" => "BAGDOGRA",
            "subdivisioncd" => "0304",
            "usercode" => 1,
            "posted_date" => "2018-09-24 16:51:03",
        ),
        array(
            "policestationcd" => "030402",
            "policestation" => "KHORIBARI",
            "subdivisioncd" => "0304",
            "usercode" => 1,
            "posted_date" => "2018-09-24 16:51:03",
        ),
        array(
            "policestationcd" => "030403",
            "policestation" => "MATIGARA",
            "subdivisioncd" => "0304",
            "usercode" => 1,
            "posted_date" => "2018-09-24 16:51:03",
        ),
        array(
            "policestationcd" => "030404",
            "policestation" => "NAXALBARI",
            "subdivisioncd" => "0304",
            "usercode" => 1,
            "posted_date" => "2018-09-24 16:51:03",
        ),
        array(
            "policestationcd" => "030406",
            "policestation" => "PHANSIDEWA",
            "subdivisioncd" => "0304",
            "usercode" => 1,
            "posted_date" => "2018-09-24 16:51:03",
        ),
        array(
            "policestationcd" => "030407",
            "policestation" => "PRADHAN NAGAR",
            "subdivisioncd" => "0304",
            "usercode" => 1,
            "posted_date" => "2018-09-24 16:51:03",
        ),
        array(
            "policestationcd" => "030408",
            "policestation" => "SILIGURI",
            "subdivisioncd" => "0304",
            "usercode" => 1,
            "posted_date" => "2018-09-24 16:51:03",
        ),
    );
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->policestations as $policestation){
            PoliceStation::factory()->create([
                'name' => $policestation['policestation'],
                'code' => $policestation['policestationcd'],
                'subdivision_id' => (int)substr($policestation['subdivisioncd'],-2)
            ]);
        }
    }
}
