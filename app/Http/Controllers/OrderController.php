<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Cart;
use Auth;

class OrderController extends Controller
{
    public function index()
    {
        return view('category.product.order.index',['categories'=>Category::all()]);
    }

    public function viewCart()
    {
        return view('category.product.cart.view');
    }

    public function addToCart (Request $request)
    {
        
        $customer = Auth::user();
        $shoppingCart = null;
        foreach($customer->carts->where('status','Pending') as $cart){
            $shoppingCart = $cart;
        }
        if(!$shoppingCart){
            $shoppingCart = $customer->carts()->firstOrCreate([]); 
        }
        $shoppingCart->cartProducts()->create([
            'product_id'=>$request->product_id,
            'quantity'=>$request->quantity
            ]);
        return redirect()->route('order.index');
    }

    public function place($cartId)
    {
        $cart = Cart::find($cartId);
        $cart->update(['status'=>'ordered']);
        $cart->order()->create(['amount'=>$cart->amount()]);
        return back();
    }
}
