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
        'type_payment',
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


    public function orderiteam()
    {
        return $this->hasOne(OrderIteam::class);
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

}
