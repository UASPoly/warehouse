<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>
    @section('title')
       {{$category->name}} products
    @endsection()
    
    @include('category.product.create')
    <table class="table">
    <thead>
        <tr>
            <th>S/N</th>
            <th>PRODUCT NAME</th>
            <th>PRODUCT IMAGE</th>
            <th>ACTUAL PRICE</th>
            <th>PRESENT PRICE</th>
            <th>DISCOUNT</th>
            <th>QUANTITY</th>
            <th>PRODUCT ORDERS</th>
            <th><button data-toggle="modal" data-target="#addProduct" class="btn btn-primary">ADD PRODUCT</button></th>
        </tr>
    </thead>
    <tbody>
    @foreach($category->products as $product)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$product->name}}</td>
            <td><img src="{{$product->productImage()}}" alt="" width="45" height="45"></td>
            <td>#{{$product->price}}</td>
            <td>#{{$product->presentPrice()}}</td>
            <td>#{{$product->presentDiscount()}}</td>
            <td>{{$product->quantity}}</td>
            <td></td>
            <td>
            <a href="{{route('category.product.delete',[$category->id, $product->id])}}">
            <button class="btn btn-danger" onclik="return confirm('Are you sure you want delete this product')">Delete</button>
            </a>
            <button data-toggle="modal" data-target="#product_{{$product->id}}" class="btn btn-info">Edit</button></td>
            @include('category.product.edit')
        </tr>
    @endforeach
    </tbody>
    </table>
</x-app-layout>
