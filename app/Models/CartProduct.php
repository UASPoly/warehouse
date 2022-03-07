<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartProduct extends BaseModel
{
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
    public function cart(Type $var = null)
    {
        return $this->belongsTo(Cart::class);
    }
}
