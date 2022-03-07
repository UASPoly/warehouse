<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>
    @section('title')
       {{Auth::user()->name}} cart
    @endsection()
    @php
        $total = 0;
    @endphp
        <div class="row container">
            <div class="col-md-12">
                <div class="card shadow">
                @foreach(Auth::user()->carts->where('status','pending') as $cart)
                    <div class="card-header">
                        SHOPPING CART
                    </div>
                    <div class="card-body">
                        <table class="table">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>PRODUCT</th>
                                <th>QUANTITY</th>
                                <th>PRICE</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($cart->cartProducts as $cartProduct)
                                <tr>
                                    <td></td>
                                    <td>{{$cartProduct->product->name}}</td>
                                    <td>{{$cartProduct->quantity}}</td>
                                    <td>{{$cartProduct->quantity * $cartProduct->product->presentPrice()}}</td>
                                    
                                </tr>
                            @endforeach
                            
                            <tr>
                                <td></td>
                                <td><b>Total</b></td>
                                <td></td>
                                <td><b>{{$cart->amount()}}</b></td>
                            </tr>
                           
                        </tbody>
                        </table>
                        <a href="{{route('order.place',$cart->id)}}" onclick="return confirm('Are you sure you want to purchase this products')"><button class="btn btn-primary">Place Order</button></a>
                        @endforeach
                    </div>
                    @if(!Auth::user()->hasCart())
                    <div class="alert alert-success"><b> All the shopping cart has been ordered successfully please wait of delivery</b></div>
                    @endif
                </div>
            </div>
        </div>

</x-app-layout>
