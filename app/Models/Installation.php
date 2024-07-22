<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models;

class Installation extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $dates = ['deleted_at'];
    protected $table = 'installation';
    protected $fillable = [
        'user_id',
        'installation_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
 
  
}
