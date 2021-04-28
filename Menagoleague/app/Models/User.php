<?php

namespace App\Models;

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

    public function getRoles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function getTeam()
    {
        return $this->hasOne(Team::class);
    }

    public function getMessages()
    {
        return $this->hasMany(Message::class);
    }

    public function isAdministrator()
    {
        return $this->roles()->where('name', 'Administrator');
    }

    public function isManager()
    {
        return $this->roles()->where('name', 'Manager')->exists();
    }
}
