<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountCode extends Model
{
    use HasFactory;
    protected $fillable = [
        'code_name',
        'discount_value',
        'status',
        'created_by',
    ];

    public function order()
    {
        return $this->belongsToMany(Order::class);
    }
}
