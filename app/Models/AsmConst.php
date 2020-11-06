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

    public function offices()
    {
        return $this->hasMany(Office::class);
    }

    public function temp_electors()
    {
        return $this->hasMany(Elector::class, 'temp_asm_const_id');
    }
    
    public function perm_electors()
    {
        return $this->hasMany(Elector::class, 'perm_asm_const_id');
    }

    public function duty_electors()
    {
        return $this->hasMany(Elector::class, 'duty_asm_const_id');
    }

}
