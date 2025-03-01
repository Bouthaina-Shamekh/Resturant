<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sec_Product extends Model
{
    use HasFactory;

    protected $table = "sec_products";

    public $timestamps = false;

    protected $fillable = [
        'name_en',
        'name_ar',
        'price',
        'compare_price',
        'description',
        'num_meal',
        'product_id',
    ];

    public function product()
    {
        return $this->belongsma(Product::class);
    }

}
