<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    public static $rules = [
        'name'              => 'required|max:100|min:3',
        'hod_designation'   => 'required|max:50|min:3',
        'address'           => 'required|max:100:min:3',
        'post_office'       => 'required|max:30|min:3',
        'pincode'           => 'required|digits:6',
        'district_id'       => 'required',
        'subdivision_id'    => 'required',
        'block_muni_id'     => 'required',
        'police_station_id' => 'required',
        'asm_const_id'      => 'required',
        'category_id'       => 'required',
        'institute_id'      => 'required',
        'phone'             => 'required|numeric',
        'fax'               => 'required|numeric',
        'email'             => 'required|email',
        'hod_mobile'        => 'required|digits:10',
        'total_staff'       => 'required|gt:0|lt:1000',
        'male_staff'        => 'required|gt:0|lt:1000',
        'female_staff'      => 'required|gt:0|lt:1000'
    ];

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function subdivision()
    {
        return $this->belongsTo(Subdivision::class);
    }

    public function blocknuni()
    {
        return $this->belongsTo(BlockMuni::class);
    }

    public function policestation()
    {
        return $this->belongsTo(PoliceStation::class);
    }

    public function asmconst()
    {
        return $this->belongsTo(AsmConst::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function institute()
    {
        return $this->belongsTo(Institute::class);
    }

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    public function user()
    {
        return $this->morphOne(UserResource::class, 'resource');
    }
}
