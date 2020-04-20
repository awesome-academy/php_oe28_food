<?php

namespace App\Repositories\Eloquent;

use App\Http\Models\Category;
use App\Repositories\Contracts\CategoryRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository as Repository;

class CategoryRepository extends Repository implements CategoryRepositoryInterface
{
    /**
     * Specify Model class name
     */
    function model()
    {
        return Category::class;
    }
}
