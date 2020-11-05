<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

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
}
