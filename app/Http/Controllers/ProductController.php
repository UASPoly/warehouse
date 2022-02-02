<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Services\Upload\FileUpload;

class ProductController extends Controller
{
    use FileUpload;

    public function index($categoryId)
    {
        return view('category.product.index',['category'=>Category::find($categoryId)]);
    }

    public function register (Request $request, $categoryId)
    {
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'quantity'=>'required',
        ]);
        $category = Category::find($categoryId);
        $product = $category->products()->create([
            'name'=>$request->name,
            'price'=>$request->price,
            'discount'=>$request->discount,
            'quantity'=>$request->quantity,
        ]);
        if($request->image){
            $this->storeFile($product,'image',$request->image,$product->category->name.'/'
            .$product->name.'/');
        }
        return redirect()->route('category.product.index',[$categoryId]);
    }

    public function update (Request $request, $categoryId,$productId)
    {
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'quantity'=>'required',
        ]);
        $category = Category::find($categoryId);
        $product = Product::find($productId)->update([
            'name'=>$request->name,
            'price'=>$request->price,
            'discount'=>$request->discount,
            'quantity'=>$request->quantity,
        ]);
        if($request->image){
            $this->updateFile($product,'image',$request->image,$product->category->name.'/'
            .$product->name.'/');
        }
        return redirect()->route('category.product.index',[$categoryId]);
    }

    public function delete(Request $request, $categoryId, $productId)
    {
        Product::find($productId)->delete();
        
        return redirect()->route('category.product.index',[$categoryId]);
    }
}
