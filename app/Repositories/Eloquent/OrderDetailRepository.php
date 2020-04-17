<?php

namespace App\Repositories\Eloquent;

use App\Http\Models\OrderDetail;
use App\Repositories\Contracts\OrderDetailRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository as Repository;

class OrderDetailRepository extends Repository implements OrderDetailRepositoryInterface
{
    /**
     * Specify Model class name
     */
    function model()
    {
        return OrderDetail::class;
    }
}
