<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    use HasFactory;

    public static function findOrCreateById($shopping_cart_id)
    {
        if ($shopping_cart_id) {
            return ShoppingCart::find($shopping_cart_id);
        } else {
            return ShoppingCart::create();
        }
    }

    public function products()
    {
        return $this->belongsTo('App\Product', 'product_in_shopping_carts');
    }

    public function productsCount()
    {
        return $this->products()->count();
    }
}
