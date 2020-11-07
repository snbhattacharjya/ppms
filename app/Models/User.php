<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\District;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scope()
    {
        return $this->belongsTo(Scope::class);
    }

    public function resource()
    {
        $scope_name = 'App\\Models\\'.$this->scope->name;

        $resource = new $scope_name();

        return $resource::find($this->resource_id);
    }

    public function applied_duty_exemptions()
    {
        return $this->hasMany(DutyExemption::class,'applied_by');
    }

    public function processed_duty_exemptions()
    {
        return $this->hasMany(DutyExemption::class, 'processed_by');
    }

}
