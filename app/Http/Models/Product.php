<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'name',
        'category_id',
        'image',
        'detail',
        'price',
    ];

    public function category()
    {
        $this->belongsTo(Category::class);
    }
}
