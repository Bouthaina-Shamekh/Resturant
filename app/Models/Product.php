<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_ar',
        'name_en',
        'image',
        'slug',
        'quantity',
        'preparation_time',
        'content_ar',
        'content_en',
        'status',
        'category_id',
        'created_by',
    ];


    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Relationships
    public function category()
    {
        return $this->belongsTo(Category::class)->withDefault();
    }

    public function meals()
    {
        return $this->hasMany(Sec_Product::class);
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class,'cart_products');
    }

    public function medias()
    {
        return $this->hasMany(Media::class);
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public function admin(){
        return $this->belongsTo(Admin::class,'created_by');
    }

     // Accessors
    public function getImageUrlAttribute() // $admin->image_url
    {
        if(!$this->image){
            return asset('assets-dashboard/images/default/product.jpg');
        }
        if(Str::startsWith($this->image,['http://','https://'])){
            return $this->image;
        }
        return asset('storage/'. $this->image);
    }
}
