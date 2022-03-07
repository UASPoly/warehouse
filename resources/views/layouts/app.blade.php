<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="copyright" content="SISTRAC ID, https://sistrac.com">

  <title>{{ config('app.name') }} - @yield('title')</title>

  <link rel="stylesheet" href="{{asset('assets/vendor/animate/animate.css')}}">

  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">

  <link rel="stylesheet" href="{{asset('assets/css/maicons.css')}}">

  <link rel="stylesheet" href="{{asset('assets/vendor/owl-carousel/css/owl.carousel.css')}}">

  <link rel="stylesheet" href="{{asset('assets/css/theme.css')}}">
  @livewireStyles
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-float">
      <div class="container">
        <a href="index.html" class="navbar-brand">Inv<span class="text-primary">Entory.</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
            <ul class="navbar-nav ml-lg-4 pt-3 pt-lg-0 strong">
                @if(Auth::user()->role == 'Admin')
                    <li class="nav-item active">
                        <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/dashboard') }}" class="nav-link">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('category.index') }}" class="nav-link">Store</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/dashboard') }}" class="nav-link">Transactions</a>
                    </li>
                @endif
                <li class="nav-item"><a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" class="nav-link">
                        Log Out
                </a></li>
                @if(Auth::user()->hasCart())
                    <li class="nav-item">
                        <a href="{{ route('order.cart') }}" class="nav-link">My Cart</a>
                    </li>
                @endif
                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                    @csrf
                </form>
            </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <div class="page-section counter-section">
        <div class="container">
        <br>
        {{$slot}}
        </div>
    </div>
  </main>
  <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>

  <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

  <script src="{{asset('assets/vendor/wow/wow.min.js')}}"></script>

  <script src="{{asset('assets/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

  <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>

  <script src="{{asset('assets/vendor/animateNumber/jquery.animateNumber.min.js')}}"></script>

  <script src="{{asset('assets/js/google-maps.js')}}"></script>

  <script src="{{asset('assets/js/theme.js')}}"></script>

@stack('modals')

@livewireScripts
</body>
</html>
