<?php

namespace App\Repositories\Eloquent;

use App\Http\Models\Product;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository as Repository;

class ProductRepository extends Repository implements ProductRepositoryInterface
{
    /**
     * Specify Model class name
     */
    function model()
    {
        return Product::class;
    }
}
