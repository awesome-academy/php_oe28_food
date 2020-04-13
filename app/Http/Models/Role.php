<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'price';
    protected $fillable = [
        'name',
        'description',
    ];

    public function permissions()
    {
        $this->belongsToMany(Permission::class, 'role_permission', 'role_id', 'permission_id');
    }

    public function users()
    {
        $this->hasMany(User::class);
    }
}
