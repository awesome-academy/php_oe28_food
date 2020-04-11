<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'address',
        'status',
        'total',
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function orderDetails()
    {
        $this->hasMany(OrderDetail::class);
    }
}
