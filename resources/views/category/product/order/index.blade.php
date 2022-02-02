<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>
    @section('title')
       {{Auth::user()->name}} product orders
    @endsection()
        <div class="row justify-content-center">
          @foreach($categories as $category)
          @foreach($category->products as $product)
          <div class="col-md-4 col-lg-3 py-3 wow fadeInUp card shadow">
            <div class="card-body">
              <div class="center">
                <img src="{{$product->productImage()}}" alt="" height="100" with="200" >
              </div>
              <div>
                <h5>{{$product->name}}</h5>
                <p><del># {{$product->price}}</del> #{{$product->presentPrice()}}</p>
                <p>{{$product->discount}}% discount</p>
                <p><a href="{{route('order.index')}}">Add To Card</a></p>
              </div>
            </div>
          </div>
          @endforeach
          @endforeach
        </div>

</x-app-layout>
