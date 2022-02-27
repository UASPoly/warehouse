<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @section('title')
       dashboard
    @endsection()
    
    @if(Auth::user()->role == 'Admin')
    
        <div class="row align-items-center text-center">
          <div class="col-lg-4">
            <p>Store</p>
            <h2><span class="number" data-number="{{Auth::user()->store()}}"></span></h2>
          </div>
          <div class="col-lg-4">
            <p>Orders</p>
            <h2><span class="number" data-number="{{Auth::user()->orders()}}"></span></h2>
          </div>
          <div class="col-lg-4">
            <p>Transactions</p>
            <h2><span class="number" data-number="{{Auth::user()->transactions()}}"></span></h2>
          </div>
        </div>
    @else
    @foreach(App\Models\Category::all() as $category)
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
                <p><a href="{{route('order.index')}}">Order Now</a></p>
              </div>
            </div>
          </div>
          @endforeach
      @endforeach
    @endif
</x-app-layout>
