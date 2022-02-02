<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category.index',['categories'=>Category::all()]);
    }

    public function register(Request $request)
    {
        $request->validate(['name'=>'required']);
        Category::firstOrCreate(['name'=>strtoupper($request->name)]);
        return redirect()->route('category.index');
    }

    public function update(Request $request,$categoryId)
    {
        $request->validate(['name'=>'required']);
        $category = Category::find($categoryId);
        $category->update(['name'=>strtoupper($request->name)]);
        return redirect()->route('category.index');
    }

    public function delete($categoryId)
    {
        $category = Category::find($categoryId);
        if(count($category->products) > 0){
            return redirect()->route('category.index')->with(['errors'=>'category has products']);
        }
        $category->delete();
        return redirect()->route('category.index');
    }
}
