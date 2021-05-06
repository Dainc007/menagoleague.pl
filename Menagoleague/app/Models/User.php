<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'device_id',
        'discord',
        'facebook',
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

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function team()
    {
        return $this->hasOne(Team::class);
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class)->withPivot('contract_sign_at', 'contract_expires');
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function isAdministrator()
    {
        return $this->roles()->where('name', 'Administrator')->exists();
    }

    public function isManager()
    {
        return $this->roles()->where('name', 'Manager')->exists();
    }
}
