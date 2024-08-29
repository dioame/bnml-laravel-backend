<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Activities extends Model implements Auditable
{
    use HasFactory, SoftDeletes;

    use \OwenIt\Auditing\Auditable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $dates = ['deleted_at'];
    protected $table = 'activities';
    protected $fillable = [
        'lib_activity_id',
        'start_date',
        'end_date',
        'name',
        'description',
        'area'
    ];

    public function attendance()
    {
        return $this->hasMany(Attendance::class, 'activities_id', 'id');
    }
 
  
}
