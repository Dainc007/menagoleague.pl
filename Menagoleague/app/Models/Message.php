<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    public const AVAILABLE_STATUSES = [
        'Sent'    => 'sent',
        'Read'    => 'read',
        'Recived' => 'recived'
    ];

    protected $fillable = [
        'id',
        'content',
        'title',
        'from',
        'to',
        'status',
    ];

    public function getSentMessages()
    {
        return $this->belongsTo(User::class, 'from');
    }

    public function getRecivedMessages()
    {
        return $this->belongsTo(User::class, 'to');
    }
}
