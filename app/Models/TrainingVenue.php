<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingVenue extends Model
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

    public function block_muni()
    {
        return $this->belongsTo(BlockMuni::class);
    }

    public function training_schedules()
    {
        return $this->hasMany(TrainingSchedule::class);
    }
}
