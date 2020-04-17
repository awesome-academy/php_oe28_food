<?php

namespace App\Repositories\Eloquent;

use App\Http\Models\Role;
use App\Repositories\Contracts\RoleRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository as Repository;

class RoleRepository extends Repository implements RoleRepositoryInterface
{
    /**
     * Specify Model class name
     */
    function model()
    {
        return Role::class;
    }
}
