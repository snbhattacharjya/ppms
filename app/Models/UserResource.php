<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserResource extends Model
{
    use HasFactory;

    public function resource()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function resource_model()
    {
        $resource_model = explode("\\", $this->resource_type);
        return $resource_model[2];
    }
}
