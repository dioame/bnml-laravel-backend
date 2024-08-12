<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Laravel\Sanctum\NewAccessToken;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $dates = ['deleted_at'];
    protected $guard_name = 'users';
    protected $fillable = [
        'name',
        'email',
        'password',
        'firstname',
        'middlename',
        'lastname',
        'extensionname',
        'birth_date',
        'mobile',
        'address',
        'gender',
        'role',
        'avatar',
        'lib_officer_id',
        'member_type_id',
        'date_balloted',
        'date_of_conferral',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    

    public function createToken($name, array $abilities = ['*'])
    {
        $latest = $this->tokens()->latest()->first();
        $plainTextToken = Str::random(100);
        if ($latest && $latest->otp_expired_at >= now()) { $latest->delete();}
        $token = $this->tokens()->create([
            'name' => $name,
            'token' => hash('sha256', $plainTextToken),
            'abilities' => $abilities,
            // 'otp' => rand(100000, 999999),
            // 'otp_expired_at' => Carbon::now()->addMinutes(3),
            // 'otp_request_code' => substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 2) . substr(str_shuffle('0123456789'), 0, 2)
        ]);
        return new NewAccessToken($token, $token->getKey().'|'. $plainTextToken);
    }

    public function tokens()
    {
        return $this->morphMany(PersonalAccessToken::class, 'tokenable');
    }

    public function requestToken($id)
    {
        $token = $this->tokens()->where('id', $id)->update([
            'otp' => rand(100000, 999999),
            'otp_expired_at' => Carbon::now()->addMinutes(3),
            'otp_request_code' => substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 2) . substr(str_shuffle('0123456789'), 0, 2)
        ]);
        $updatedToken = $this->tokens()->where('id', $id)->first();
        return $updatedToken;
    }

    public function installations()
    {
        return $this->hasMany(Installation::class);
    }

    public function lib_officer()
    {
        return $this->belongsTo(Lib_officers::class);
    }
}
