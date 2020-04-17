<?php

namespace App\Repositories\Eloquent;

use App\Http\Models\Order;
use App\Repositories\Contracts\OrderRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository as Repository;

class OrderRepository extends Repository implements OrderRepositoryInterface
{
    /**
     * Specify Model class name
     */
    function model()
    {
        return Order::class;
    }
}
