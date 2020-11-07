<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElectionPhase extends Model
{
    use HasFactory;

    public function election()
    {
        return $this->belongsTo(Election::class);
    }

    public function constituency_zones()
    {
        return $this->hasMany(ConstituencyZone::class);
    }
}
