<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subdivision extends Model
{
    use HasFactory;

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function block_munis()
    {
        return $this->hasMany(BlockMuni::class);
    }

    public function police_stations()
    {
        return $this->hasMany(PoliceStation::class);
    }

    public function offices()
    {
        return $this->hasMany(Office::class);
    }
}
