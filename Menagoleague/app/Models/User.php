<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    public const RIVAL_STATUSES = [
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

    public function rivals()
    {
        return  $this->belongsToMany(User::class, 'rival_user', 'user_id', 'rival_id')
            ->wherePivot('status', 'accepted')
            ->withTimestamps();
    }

    public function addRival(User $user)
    {
        return $this->rivals()->attach($user->id);
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

    public function getUsersByDeviceId(): array
    {
        $allUsers = User::where('device_id', Auth::user()->device_id)->pluck('name')->toArray();
        return $allUsers;
    }
}
