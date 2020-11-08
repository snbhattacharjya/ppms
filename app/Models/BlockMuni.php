<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlockMuni extends Model
{
    use HasFactory;

    public function subdivision()
    {
        return $this->belongsTo(Subdivision::class);
    }

    public function offices()
    {
        return $this->hasMany(Office::class);
    }

    public function temp_electors()
    {
        return $this->hasMany(Elector::class, 'temp_block_muni_id');
    }
    
    public function perm_electors()
    {
        return $this->hasMany(Elector::class, 'perm_block_muni_id');
    }

    public function duty_electors()
    {
        return $this->hasMany(Elector::class, 'duty_block_muni_id');
    }

    public function constituency()
    {
        return $this->morphOne(Constituency::class, 'constituent');
    }

    public function training_venues()
    {
        return $this->hasMany(TrainingVenue::class);
    }
}
