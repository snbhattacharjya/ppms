<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elector extends Model
{
    use HasFactory;

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function temp_asm_const()
    {
        return $this->belongsTo(AsmConst::class, 'temp_asm_const_id');
    }

    public function perm_asm_const()
    {
        return $this->belongsTo(AsmConst::class, 'perm_asm_const_id');
    }

    public function duty_asm_const()
    {
        return $this->belongsTo(AsmConst::class, 'duty_asm_const_id');
    }

    public function temp_block_muni()
    {
        return $this->belongsTo(BlockMuni::class, 'temp_block_muni_id');
    }

    public function perm_block_muni()
    {
        return $this->belongsTo(BlockMuni::class, 'perm_block_muni_id');
    }
    
    public function duty_block_muni()
    {
        return $this->belongsTo(BlockMuni::class, 'duty_block_muni_id');
    }
}
