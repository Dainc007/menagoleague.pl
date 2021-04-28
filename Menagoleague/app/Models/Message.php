<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    public const AVAILABLE_STATUSES = [
        'Sent'   => 'sent',
        'Read' => 'read',
    ];

    protected $fillable = [
        'id',
        'content',
        'title',
        'from',
        'to',
    ];

    public function fromUser()
    {
        return $this->belongsTo(User::class , 'from');
    }

    public function ToUser()
    {
        return $this->belongsTo(User::class, 'to');
    }
}
