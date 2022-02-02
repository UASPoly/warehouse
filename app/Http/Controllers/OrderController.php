<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class OrderController extends Controller
{
    public function index()
    {
        return view('category.product.order.index',['categories'=>Category::all()]);
    }
}
