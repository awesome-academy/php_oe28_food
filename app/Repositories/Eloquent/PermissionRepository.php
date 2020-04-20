<?php

namespace App\Repositories\Eloquent;

use App\Http\Models\Permission;
use App\Repositories\Contracts\PermissionRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository as Repository;

class PermissionRepository extends Repository implements PermissionRepositoryInterface
{
    /**
     * Specify Model class name
     */
    function model()
    {
        return Permission::class;
    }
}
