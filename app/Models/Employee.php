<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public function office()
    {
        return $this->belongsTo(Office::class);
    }

    public function paylevel()
    {
        return $this->belongsTo(PayLevel::class);
    }

    public function qualification()
    {
        return $this->belongsTo(Qualification::class);
    }
}