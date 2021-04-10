<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'device',
    ];

    /**
     *  available devices.
     */
    public const AVAILABLE_DEVICES = [
        'Xbox'   => 'Xbox',
        'Playstation' => 'Playstation',
        'PC' => 'PC'
    ];

    public static function getDevices(bool $keys = false)
    {
        return ($keys) ? array_keys(self::AVAILABLE_DEVICES) : array_values(self::AVAILABLE_DEVICES);
    }
}
