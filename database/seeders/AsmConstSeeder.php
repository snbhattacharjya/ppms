<?php

namespace Database\Seeders;

use App\Models\AsmConst;
use App\Models\BlockMuni;
use App\Models\District;
use App\Models\ParlConst;
use Illuminate\Database\Seeder;

class AsmConstSeeder extends Seeder
{
    protected $asm_consts = array(
        array(
            "assemblycd" => "023",
            "assemblyname" => "DARJEELING",
            "districtcd" => "03",
            "pccd" => "04",
            "usercode" => 1,
            "posted_date" => "2019-01-24 12:48:20",
        ),
        array(
            "assemblycd" => "024",
            "assemblyname" => "KURSEONG",
            "districtcd" => "03",
            "pccd" => "04",
            "usercode" => 1,
            "posted_date" => "2019-01-24 12:48:20",
        ),
        array(
            "assemblycd" => "025",
            "assemblyname" => "MATIGARA-NAXALBARI(SC)",
            "districtcd" => "03",
            "pccd" => "04",
            "usercode" => 1,
            "posted_date" => "2019-01-24 12:48:20",
        ),
        array(
            "assemblycd" => "026",
            "assemblyname" => "SILIGURI",
            "districtcd" => "03",
            "pccd" => "04",
            "usercode" => 1,
            "posted_date" => "2019-01-24 12:48:20",
        ),
        array(
            "assemblycd" => "027",
            "assemblyname" => "PHANSIDEWA(ST)",
            "districtcd" => "03",
            "pccd" => "04",
            "usercode" => 1,
            "posted_date" => "2019-01-24 12:48:20",
        ),
    );
      
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parl_const = ParlConst::first();
        $district = District::first();

        foreach ($this->asm_consts as $asm_const) {
            AsmConst::factory()->create([
                'name' => $asm_const['assemblyname'],
                'code' => $asm_const['assemblycd'],
                'parl_const_id' => $parl_const->id,
                'district_id' => $district->id
            ]);
        }
        
    }
}
