<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends BaseModel
{
    public function cartProducts()
    {
        return $this->hasMany(CartProduct::class);
    }

    public function order()
    {
        return $this->hasOne(order::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function amount()
    {
        $total = 0;
        foreach($this->cartProducts as $cartProduct){
            $total += $cartProduct->quantity * $cartProduct->product->presentPrice();
        }
        return $total;
    }
}
