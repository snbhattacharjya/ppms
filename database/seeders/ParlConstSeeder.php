<?php

namespace Database\Seeders;

use App\Models\ParlConst;
use App\Models\State;
use Illuminate\Database\Seeder;

class ParlConstSeeder extends Seeder
{
    protected $parl_consts = array(
        array(
            "pccd" => "04",
            "pcname" => "DARJEELING",
            "usercode" => 1,
            "posted_date" => "2018-08-31 03:23:33",
        ),
    );
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $state = State::first();

        foreach ($this->parl_consts as $parl_const) {
            ParlConst::factory()->create([
                'name' => $parl_const['pcname'],
                'code' => $parl_const['pccd'],
                'state_id' => $state->id
            ]);
        }
    }
}
