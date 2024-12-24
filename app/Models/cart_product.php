<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class cart_product extends Pivot
{
    use HasFactory;

    protected $table = 'cart_products';

    protected $primaryKey = ['cart_id', 'product_id']; // تحديد  المركبة
    public $incrementing = false; // تحديد أنه لا يوجد مفتاح مركب
    protected $fillable = [
        'cart_id',
        'product_id',
        'quantity',
        'mael_id'
    ];

}
