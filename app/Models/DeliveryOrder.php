<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class DeliveryOrder extends Pivot
{
    use HasFactory;

    protected $fillable = [
        'description_en',
        'description_ar',
        'real_time',
        'status',
        'delviry_accept_status',
        'delivery_fee',
        'delivery_tips',
        'delivery_id',
        'order_id',
    ];


    public function delivery()
    {
        return $this->belongsTo(Delivery::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
