<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Tests\TestCase;

class OfficeControllerTest extends TestCase
{
    /**
     * Indicates whether the database should be seeded before each test.
     *
     * @var bool
     */
    protected $seed = true;

    use RefreshDatabase;
    /**
     * Office Model Validation Rest.
     * @dataProvider requiredFormValidators
     * @dataProvider maxLengthFormValidators
     * @dataProvider numericFormValidators
     * @dataProvider emailFormValidators
     * @dataProvider digitsFormValidators
     * @dataProvider numberRangeFormValidators
     * @return void
     */
    public function test_office_validation_errors($input, $value)
    {
        $user = User::factory()->create();

        $this->actingAs($user)->post(route('office.store', [$input => $value]))
                ->assertSessionHasErrors($input);
    }

    public function requiredFormValidators()
    {
        return [
            ['name'              , ''],
            ['hod_designation'   , ''],
            ['address'           , ''],
            ['post_office'       , ''],            
            ['pincode'           , ''],
            ['district_id'       , ''],     
            ['subdivision_id'    , ''],     
            ['block_muni_id'     , ''],     
            ['police_station_id' , ''],     
            ['asm_const_id'      , ''],     
            ['category_id'       , ''],     
            ['institute_id'      , ''],     
            ['phone'             , ''],
            ['fax'               , ''],
            ['email'             , ''],           
            ['hod_mobile'        , ''],
            ['total_staff'       , ''],          
            ['male_staff'        , ''],          
            ['female_staff'      , '']     
        ];
    }

    public function maxLengthFormValidators()
    {
        return [
            ['name'              , Str::random(101)],
            ['hod_designation'   , Str::random(51)],
            ['address'           , Str::random(101)],
            ['post_office'       , Str::random(31)],                 
        ];
    }

    public function numericFormValidators()
    {
        return [     
            ['phone'             , 'asbcfg'],
            ['fax'               , 'asbcfg'],
            ['phone'             , 'abc@123'],
            ['fax'               , 'abc@123'],    
        ];
    }

    public function digitsFormValidators()
    {
        return [            
            ['pincode'           , 'ABC'],         
            ['hod_mobile'        , 'ABC'],
            ['pincode'           , 1234567],         
            ['hod_mobile'        , 12345678901],
            ['pincode'           , 12345],         
            ['hod_mobile'        , 123456789],     
        ];
    }

    public function numberRangeFormValidators()
    {
        return [
            ['total_staff'       , 0],          
            ['male_staff'        , 1000],          
            ['female_staff'      , 1000],
            ['total_staff'       , 'A'],          
            ['male_staff'        , 'B'],          
            ['female_staff'      , 'C']     
        ];
    }

    public function emailFormValidators()
    {
        return [
            ['email'             , 'not-an-email'],                
        ];
    }
}
