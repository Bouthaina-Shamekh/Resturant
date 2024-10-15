<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'reason_of_refuse',
        'store_accept_status',
        'pyment_method',
        'voucher',
        'tax',
        'delivered_code',
        'receipt_code',
        'total_amount',
        'table_number',
        'note',
        'type',
        'status',
        'payment_status',
        'user_id',
    ];


    public function orderIteams()
    {
        return $this->hasMany(OrderIteam::class);
    }
    public function orderAddresses()
    {
        return $this->hasMany(OrderAddresses::class);
    }

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }

    public function discount()
    {
        return $this->belongsToMany(DiscountCode::class);
    }

    public function delivery()
    {
        return $this->belongsToMany(Delivery::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

}
