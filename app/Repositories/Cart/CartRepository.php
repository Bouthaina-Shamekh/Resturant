<?php

namespace App\Repositories\Cart;

use App\Models\Product;
use Illuminate\Support\Collection;

interface CartRepository
{
    //get data from cart
    public function get() : Collection ;

    public function add(Product $product , $quantity = 1, $mael_id);

    public function update(Product $product , $quantity);

    public function delete($id);

    public function empty();

    public function total() : float;









}

