<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class OrderAddresses extends Pivot
{
    use HasFactory;

    protected $fillable = [
        'name',
        'region',
        'street',
        'floor',
        'near',
        'another_details',
        'longitude',
        'latitude',
        'phone',
        'post_code',
        'user_id',
        'order_id',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }
}
