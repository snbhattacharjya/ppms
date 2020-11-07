<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DutyExemption extends Model
{
    use HasFactory;

    public function election_officer()
    {
        return $this->belongsTo(ElectionOfficer::class);
    }

    public function applied_user()
    {
        return $this->belongsTo(User::class);
    }

    public function processed_user()
    {
        return $this->belongsTo(User::class);
    }
}
