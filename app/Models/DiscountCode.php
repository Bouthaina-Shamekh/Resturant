<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountCode extends Model
{
    use HasFactory;
    protected $fillable = [
        'Discount',
        'status',
        'admin_id',
        'product_id',
        
    ];

    public function order()
    {
        return $this->belongsToMany(Order::class);
    }
}
