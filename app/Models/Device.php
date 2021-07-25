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

    public static function getDeviceId(string $device)
    {

        $userDevice = Device::where('device', $device)->first('id');

        if ($userDevice) {
            return $userDevice->id;
        }
    }
}
