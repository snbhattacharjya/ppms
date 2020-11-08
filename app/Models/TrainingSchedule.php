<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingSchedule extends Model
{
    use HasFactory;

    public function training()
    {
        return $this->belongsTo(Training::class);
    }

    public function training_venue()
    {
        return $this->belongsTo(TrainingVenue::class);
    }

    public function trainees()
    {
        return $this->hasMany(Trainee::class);
    }
}
