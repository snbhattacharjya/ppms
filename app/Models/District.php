<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function subdivisions()
    {
        return $this->hasMany(Subdivision::class);
    }

    public function offices()
    {
        return $this->hasMany(Office::class);
    }

    public function training_venues()
    {
        return $this->hasMany(TrainingVenue::class);
    }
}
