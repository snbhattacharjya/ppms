<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Constituency extends Model
{
    use HasFactory;

    public function constituent()
    {
        return $this->morphTo();
    }

    public function polling_stations()
    {
        return $this->hasMany(PollingStation::class);
    }

    public function deployed_groups()
    {
        return $this->hasMany(DeployedGroup::class);
    }
}
