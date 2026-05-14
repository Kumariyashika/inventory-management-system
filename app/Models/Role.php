<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $table = 'role';

    protected $fillable = [
        'roleName',
        'permissions',
        'status',
    ];

    public function getPermissionsArrayAttribute()
    {
        return $this->permissions ? explode(',', $this->permissions) : [];
    }

    public function users()
    {
        return $this->hasMany(User::class, 'role_id');
    }
}