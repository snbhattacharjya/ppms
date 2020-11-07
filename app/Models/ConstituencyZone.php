<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConstituencyZone extends Model
{
    use HasFactory;

    public function election_phase()
    {
        return $this->belongsTo(ElectionPhase::class);
    }
}
