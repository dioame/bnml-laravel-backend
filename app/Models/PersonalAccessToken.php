<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\PersonalAccessToken as SanctumPersonalAccessToken;

class PersonalAccessToken extends SanctumPersonalAccessToken
{
    use HasFactory;

    protected $casts = [
        'abilities' => 'json',
        'last_used_at' => 'datetime',
        'device' => 'json'
    ];

    protected $fillable = [
        'name',
        'device',
        'token',
        'abilities',
        // 'otp',
        // 'otp_expired_at',
        // 'otp_request_code',
    ];
}
