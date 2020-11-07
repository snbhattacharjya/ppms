<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    public function districts()
    {
        return $this->hasMany(District::class);
    }

    public function parl_consts()
    {
        return $this->hasMany(ParlConst::class);
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
