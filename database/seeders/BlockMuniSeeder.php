<?php

namespace Database\Seeders;

use App\Models\BlockMuni;
use Illuminate\Database\Seeder;

class BlockMuniSeeder extends Seeder
{
    public $block_munis = array(
        array(
            "blockminicd" => "030101",
            "subdivisioncd" => "0301",
            "blockmuni" => "MIRIK",
            "block_or_muni" => NULL,
            "districtcd" => NULL,
            "usercode" => 1,
            "posted_date" => "2018-09-24 16:49:01",
        ),
        array(
            "blockminicd" => "030102",
            "subdivisioncd" => "0301",
            "blockmuni" => "MIRIK MUNICIPALITY",
            "block_or_muni" => NULL,
            "districtcd" => NULL,
            "usercode" => 1,
            "posted_date" => "2018-09-24 16:49:01",
        ),
        array(
            "blockminicd" => "030201",
            "subdivisioncd" => "0302",
            "blockmuni" => "DARJEELING-PULBAZAR",
            "block_or_muni" => NULL,
            "districtcd" => NULL,
            "usercode" => 1,
            "posted_date" => "2018-09-24 16:49:01",
        ),
        array(
            "blockminicd" => "030202",
            "subdivisioncd" => "0302",
            "blockmuni" => "RANGLI-RANGLIOT",
            "block_or_muni" => NULL,
            "districtcd" => NULL,
            "usercode" => 1,
            "posted_date" => "2018-09-24 16:49:01",
        ),
        array(
            "blockminicd" => "030203",
            "subdivisioncd" => "0302",
            "blockmuni" => "JOREBUNGLOW-SUKHIAPOKHARI",
            "block_or_muni" => NULL,
            "districtcd" => NULL,
            "usercode" => 1,
            "posted_date" => "2018-09-24 16:49:01",
        ),
        array(
            "blockminicd" => "030204",
            "subdivisioncd" => "0302",
            "blockmuni" => "DARJEELING MUNICIPALITY",
            "block_or_muni" => NULL,
            "districtcd" => NULL,
            "usercode" => 1,
            "posted_date" => "2018-09-24 16:49:01",
        ),
        array(
            "blockminicd" => "030301",
            "subdivisioncd" => "0303",
            "blockmuni" => "KURSEONG",
            "block_or_muni" => NULL,
            "districtcd" => NULL,
            "usercode" => 1,
            "posted_date" => "2018-09-24 16:49:01",
        ),
        array(
            "blockminicd" => "030303",
            "subdivisioncd" => "0303",
            "blockmuni" => "KURSEONG MUNICIPALITY",
            "block_or_muni" => NULL,
            "districtcd" => NULL,
            "usercode" => 1,
            "posted_date" => "2018-09-24 16:49:01",
        ),
        array(
            "blockminicd" => "030401",
            "subdivisioncd" => "0304",
            "blockmuni" => "MATIGARA",
            "block_or_muni" => NULL,
            "districtcd" => NULL,
            "usercode" => 1,
            "posted_date" => "2018-09-24 16:49:01",
        ),
        array(
            "blockminicd" => "030402",
            "subdivisioncd" => "0304",
            "blockmuni" => "NAXALBARI",
            "block_or_muni" => NULL,
            "districtcd" => NULL,
            "usercode" => 1,
            "posted_date" => "2018-09-24 16:49:01",
        ),
        array(
            "blockminicd" => "030403",
            "subdivisioncd" => "0304",
            "blockmuni" => "KHORIBARI",
            "block_or_muni" => NULL,
            "districtcd" => NULL,
            "usercode" => 1,
            "posted_date" => "2018-09-24 16:49:01",
        ),
        array(
            "blockminicd" => "030404",
            "subdivisioncd" => "0304",
            "blockmuni" => "PHANSIDEWA",
            "block_or_muni" => NULL,
            "districtcd" => NULL,
            "usercode" => 1,
            "posted_date" => "2018-09-24 16:49:01",
        ),
        array(
            "blockminicd" => "030405",
            "subdivisioncd" => "0304",
            "blockmuni" => "SILIGURI MUNICIPAL CORPORATION",
            "block_or_muni" => NULL,
            "districtcd" => NULL,
            "usercode" => 1,
            "posted_date" => "2018-09-24 16:49:01",
        ),
    );
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->block_munis as $block_muni){
            BlockMuni::factory()->create([
                'name' => $block_muni['blockmuni'],
                'code' => $block_muni['blockminicd'],
                'subdivision_id' => (int)substr($block_muni['subdivisioncd'],-2)
            ]);
        }
    }
}
