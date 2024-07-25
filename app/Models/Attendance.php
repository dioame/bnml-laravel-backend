<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *s
     * @var array<int, string>
     */

    protected $dates = ['deleted_at'];
    protected $table = 'attendance';
    protected $fillable = [
        'user_id',
        'activities_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function activities()
    {
        return $this->belongsTo(Activity::class, 'activity_id', 'id');
    }
 
  
}
