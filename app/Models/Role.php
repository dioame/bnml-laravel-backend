<?php

namespace App\Models;
use Spatie\Translatable\HasTranslations;

class Role extends \Spatie\Permission\Models\Role
{
    use HasTranslations;

    protected $fillable = ['name', 'guard_name'];

    protected $translatable = ['public_name'];
    
}
