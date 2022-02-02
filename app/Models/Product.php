<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Storage;

class Product extends BaseModel
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function productImage(Type $var = null)
    {
        return Storage::url($this->image);
    }

    public function presentPrice()
    {
        $discount = $this->price/100*$this->discount;
        return $this->price - $discount;
    }

    public function presentDiscount()
    {
        return $this->price/100*$this->discount;
    }
}
