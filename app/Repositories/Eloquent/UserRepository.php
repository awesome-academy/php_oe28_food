<?php

namespace App\Repositories\Eloquent;

use App\Http\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository as Repository;

class UserRepository extends Repository implements UserRepositoryInterface
{
    /**
     * Specify Model class name
     */
    function model()
    {
        return User::class;
    }
}
