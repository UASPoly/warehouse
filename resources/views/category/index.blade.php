<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Store') }}
        </h2>
    </x-slot>
    @section('title')
       store
    @endsection()
    

    @include('category.create')
    <table class="table">
    <thead>
        <tr>
            <th>S/N</th>
            <th>CATEGORY NAME</th>
            <th>NUMBER OF PRODUCT AVAILABLE</th>
            <th><button data-toggle="modal" data-target="#addCategory" class="btn btn-primary">ADD CATEGORY</button></th>
        </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
        <tr>
            @include('category.edit')
            <td>{{$loop->iteration}}</td>
            <td>{{$category->name}}</td>
            <td><a href="{{route('category.product.index',[$category->id])}}"><button class="btn btn-info">View {{count($category->products)}} Products</button></a></td>
            <td>
            <button class="btn btn-info" data-toggle="modal" data-target="#edit_{{$category->id}}">Edit</button>
            <a href="{{route('category.delete',[$category->id])}}"><button class="btn btn-danger">Delete</button></a>
            </td>
        </tr>
    @endforeach
    </tbody>
    </table>
    
</x-app-layout>
