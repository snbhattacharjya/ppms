<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    use HasFactory;

    public function election_officer()
    {
        return $this->belongsTo(ElectionOfficer::class);
    }

    public function training()
    {
        return $this->belongsTo(Training::class);
    }
}
