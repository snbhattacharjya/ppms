<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElectionOfficer extends Model
{
    use HasFactory;

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function election()
    {
        return $this->belongsTo(Election::class);
    }

    public function election_phase()
    {
        return $this->belongsTo(ElectionPhase::class);
    }

    public function constituency_zone()
    {
        return $this->belongsTo(ConstituencyZone::class);
    }

    public function duty()
    {
        return $this->belongsTo(Duty::class);
    }

    public function duty_exemption()
    {
        return $this->belongsTo(DutyExemption::class);
    }

    public function trainees()
    {
        return $this->hasMany(Trainee::class);
    }

    public function deployed_groups()
    {
        return $this->hasMany(DeployedGroup::class);
    }
}
