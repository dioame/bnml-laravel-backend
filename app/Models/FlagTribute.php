<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class FlagTribute extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *s
     * @var array<int, string>
     */

    protected $dates = ['deleted_at'];
    protected $table = 'flag_tribute';
    protected $fillable = [
        'user_id',
        'points'
    ];

 
  
}
