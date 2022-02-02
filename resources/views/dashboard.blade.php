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
            <h2><span class="number" data-number="216422"></span></h2>
          </div>
          <div class="col-lg-4">
            <p>Transactions</p>
            <h2><span class="number" data-number="73"></span></h2>
          </div>
        </div>
      
    @else

    @endif
</x-app-layout>
