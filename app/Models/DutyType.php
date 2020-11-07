<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DutyType extends Model
{
    use HasFactory;

    public function duties()
    {
        return $this->hasMany(Duty::class);
    }
}
