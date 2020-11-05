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
}
