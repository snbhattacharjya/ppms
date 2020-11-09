<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeployedGroup extends Model
{
    use HasFactory;

    public function election_officer()
    {
        return $this->belongsTo(ElectionOfficer::class);
    }

    public function constituency()
    {
        return $this->belongsTo(Constituency::class);
    }

    public function polling_station()
    {
        return $this->belongsTo(PollingStation::class);
    }
}
