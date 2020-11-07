<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duty extends Model
{
    use HasFactory;

    public function duty_type()
    {
        return $this->belongsTo(DutyType::class);
    }

    public function election_officers()
    {
        return $this->hasMany(ElectionOfficer::class);
    }
}
