<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tests\Unit\TrainingScheduleTest;

class Training extends Model
{
    use HasFactory;

    public function election()
    {
        return $this->belongsTo(Election::class);
    }

    public function election_phase()
    {
        return $this->belongsTo(ElectionPhase::class);
    }

    public function training_schedules()
    {
        return $this->hasMany(TrainingSchedule::class);
    }

    public function trainees()
    {
        return $this->hasMany(Trainee::class);
    }
}
