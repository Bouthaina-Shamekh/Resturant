<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class cart_product extends Pivot
{
    use HasFactory;

    protected $fillable = [
        'cart_id',
        'product_id',
        'quantity',
    ];

}
