<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    public const AVAILABLE_STATUSES = [
        'sent', 'accepted', 'rejected'
    ];

    public const MAX_USER_RIVALS = 5;

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

    /* Relations */

    public function roles()
    {
        return $this->belongsToMany(Role::class)
            ->withTimestamps();
    }

    public function rivals()
    {
        return $this->belongsToMany(User::class, 'rival_user', 'user_id', 'rival_id')
            ->withTimestamps();
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

    public function tutorial()
    {
        return $this->hasOne(Tutorial::class);
    }

    /* Extra Functions */

    public function isAdministrator()
    {
        return $this->roles()->where('name', 'Administrator')->exists();
    }

    public function isManager()
    {
        return $this->roles()->where('name', 'Manager')->exists();
    }

    public function getUsersByDeviceId()
    {
        $allUsers = User::where('device_id', Auth::user()->device_id)->select('name', 'id')
            ->orderBy('name', 'ASC')
            ->get();
        return $allUsers;
    }

    /* Rivals */

    public function rivalsOfMine()
    {
        return $this->belongsToMany(User::class, 'rival_user', 'user_id', 'rival_id')
            ->wherePivot('status', 'accepted');
    }

    public function rivalOf()
    {
        return $this->belongsToMany(User::class, 'rival_user', 'rival_id', 'user_id')
            ->wherePivot('status', 'accepted');
    }

    public function rivalsInvitations()
    {
        return $this->belongsToMany(User::class, 'rival_user', 'rival_id', 'user_id')
            ->wherePivot('status', 'sent')
            ->withPivot('id');
    }

    public function getRivalsAttribute()
    {
        if (!array_key_exists('rivals', $this->relations)) {
            $this->loadRivals();
        }

        return $this->getRelation('rivals');
    }

    protected function loadRivals()
    {
        if (!array_key_exists('rivals', $this->relations)) {
            $rivals = $this->mergeRivals();

            $this->setRelation('rivals', $rivals);
        }
    }

    protected function mergeRivals()
    {
        return $this->rivalsOfMine->merge($this->rivalOf);
    }
}
