<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * User available devices.
     */
    public const AVAILABLE_DEVICES = [
        'Xbox'   => 'Xbox',
        'Playstation' => 'Playstation',
        'PC' => 'PC'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'device',
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

    public static function getDevices(bool $keys = false)
    {
        return ($keys) ? array_keys(self::AVAILABLE_DEVICES) : array_values(self::AVAILABLE_DEVICES);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function team()
    {
        return $this->hasOne(Team::class);
    }

    public function isAdministrator() {
        return $this->roles()->where('name', 'admin')->exists();
     }
}
