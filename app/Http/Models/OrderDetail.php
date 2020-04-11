<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_details';
    protected $fillable = [
        'order_id',
        'product_id',
        'amount',
    ];

    public function order()
    {
        $this->belongsTo(Order::class);
    }

    public function product()
    {
        $this->belongsTo(Product::class);
    }
}
