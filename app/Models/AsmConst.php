<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsmConst extends Model
{
    use HasFactory;

    public function parl_const()
    {
        return $this->belongsTo(ParlConst::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }
}
