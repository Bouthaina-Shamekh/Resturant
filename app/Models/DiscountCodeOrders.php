<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountCodeOrders extends Model
{
    use HasFactory;
    protected $table = 'discountcode_orders';

    protected $fillable = [
        'discount',
        'discount_code_id',
        'order_id',
    ];

    public function order()
    {
        return $this->belongsToMany(Order::class);
    }
}
