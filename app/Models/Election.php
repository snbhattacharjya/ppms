<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Election extends Model
{
    use HasFactory;

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function phases()
    {
        return $this->hasMany(ElectionPhase::class);
    }

    public function election_officers()
    {
        return $this->hasMany(ElectionOfficer::class);
    }

    public function trainings()
    {
        return $this->hasMany(Training::class);
    }

    public function polling_stations()
    {
        return $this->hasMany(PollingStation::class);
    }
}
