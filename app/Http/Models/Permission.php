<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';
    protected $fillable = [
        'name',
        'description',
    ];

    public function roles()
    {
        $this->belongsToMany(RolePermission::class, 'role_permission', 'permission_id', 'role_id');
    }
}
