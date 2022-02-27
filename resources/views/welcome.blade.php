<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="copyright" content="SISTRAC ID, https://sistrac.com">

  <title>{{config('app.name')}}</title>

  <link rel="stylesheet" href="{{asset('assets/vendor/animate/animate.css')}}">

  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">

  <link rel="stylesheet" href="{{asset('assets/css/maicons.css')}}">

  <link rel="stylesheet" href="{{asset('assets/vendor/owl-carousel/css/owl.carousel.css')}}">

  <link rel="stylesheet" href="{{asset('assets/css/theme.css')}}">

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-float">
      <div class="container">
        <a href="index.html" class="navbar-brand">Inv<span class="text-primary">entory.</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
            <ul class="navbar-nav ml-lg-4 pt-3 pt-lg-0">
                @if (Route::has('login'))
                    @auth 
                    <li class="nav-item active">
                        <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                    </li>
                    @else
                    <li class="nav-item active">
                        <a href="{{ route('login') }}" class="nav-link">Log in</a>
                    </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="ml-4 nav-link">Register</a>
                        </li>
                        @endif
                    @endauth
                    
                @endif
            </ul>
        </div>
      </div>
    </nav>

    <div class="page-banner home-banner">
      <div class="container h-100">
        <div class="row align-items-center h-100">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1 class="mb-4">Our Products Are Our Pride</h1>
            <p class="text-lg mb-5">Ignite the most powerfull growth engine you have ever built for your company</p>
          </div>
          <div class="col-lg-6 py-3 wow zoomIn">
            <div class="img-place">
              <img src="assets/img/bg_image_1.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main>
    <div class="page-section features">
      <div class="container">
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
                <p><a href="{{route('order.index')}}">Order Now</a></p>
              </div>
            </div>
          </div>
          @endforeach
          @endforeach
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
  
    <div class="page-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 py-3 wow zoomIn">
            <div class="img-place text-center">
              <img src="assets/img/bg_image_2.png" alt="">
            </div>
          </div>
          <div class="col-lg-6 py-3 wow fadeInRight">
            <h2 class="title-section">We have <span class="marked">Dynamic</span> product price from most Powerfull Companies</h2>
            <div class="divider"></div>
            <p>We provide marketing services to startups & small business to looking for partner for their digital media, design & dev lead generation & communication.</p>
            <div class="img-place mb-3">
              <img src="assets/img/testi_image.png" alt="">
            </div>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
  
    <div class="page-section counter-section">
      <div class="container">
        <div class="row align-items-center text-center">
          <div class="col-lg-4">
            <p>Customers Today</p>
            <h2><span class="number" data-number="816278"></span></h2>
          </div>
          <div class="col-lg-4">
            <p>Retailers Today</p>
            <h2><span class="number" data-number="216422"></span></h2>
          </div>
          <div class="col-lg-4">
            <p>Pertners Today</p>
            <h2><span class="number" data-number="73"></span></h2>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
  
    <div class="page-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 py-3 wow fadeInLeft">
            <h2 class="title-section">We're <span class="marked">ready to</span> Serve you with best</h2>
            <div class="divider"></div>
            <p class="mb-5">We provide marketing services to startups & small business to looking for partner for their digital media, design & dev lead generation & communication.</p>
            <a href="#" class="btn btn-primary">More Details</a>
            <a href="#" class="btn btn-outline ml-2">See pricing</a>
          </div>
          <div class="col-lg-6 py-3 wow zoomIn">
            <div class="img-place text-center">
              <img src="assets/img/bg_image_3.png" alt="">
            </div>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
  
    <div class="page-section">
      <div class="container">
        <div class="text-center wow fadeInUp">
          <div class="subhead">Why Choose Us</div>
          <h2 class="title-section">Your <span class="marked">Comfort</span> is Our Priority</h2>
          <div class="divider mx-auto"></div>
        </div>
  
        <div class="row mt-5 text-center">
          <div class="col-lg-4 py-3 wow fadeInUp">
            <div class="display-3"><span class="mai-shapes"></span></div>
            <h5>High Performance</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, sit.</p>
          </div>
          <div class="col-lg-4 py-3 wow fadeInUp">
            <div class="display-3"><span class="mai-shapes"></span></div>
            <h5>Friendly Prices</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, sit.</p>
          </div>
          <div class="col-lg-4 py-3 wow fadeInUp">
            <div class="display-3"><span class="mai-shapes"></span></div>
            <h5>No time-confusing</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, sit.</p>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
  
  
  
    <div class="page-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h2 class="title-section">Get in Touch</h2>
            <div class="divider"></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Laborum ratione autem quidem veritatis!</p>
  
            <ul class="contact-list">
              <li>
                <div class="icon"><span class="mai-map"></span></div>
                <div class="content">123 Fake Street, New York, USA</div>
              </li>
              <li>
                <div class="icon"><span class="mai-mail"></span></div>
                <div class="content"><a href="#">info@digigram.com</a></div>
              </li>
              <li>
                <div class="icon"><span class="mai-phone-portrait"></span></div>
                <div class="content"><a href="#">+00 1122 3344 55</a></div>
              </li>
            </ul>
          </div>
          <div class="col-lg-6 py-3 wow fadeInUp">
            <div class="subhead">Contact Us</div>
            <h2 class="title-section">Drop Us a Line</h2>
            <div class="divider"></div>
            
            <form action="#">
              <div class="py-2">
                <input type="text" class="form-control" placeholder="Full name">
              </div>
              <div class="py-2">
                <input type="text" class="form-control" placeholder="Email">
              </div>
              <div class="py-2">
                <textarea rows="6" class="form-control" placeholder="Enter message"></textarea>
              </div>
              <button type="submit" class="btn btn-primary rounded-pill mt-4">Send Message</button>
            </form>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
  
  
    <div class="page-section client-section">
      <div class="container-fluid">
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 justify-content-center">
          <div class="item wow zoomIn">
            <img src="assets/img/clients/airbnb.png" alt="">
          </div>
          <div class="item wow zoomIn">
            <img src="assets/img/clients/google.png" alt="">
          </div>
          <div class="item wow zoomIn">
            <img src="assets/img/clients/stripe.png" alt="">
          </div>
          <div class="item wow zoomIn">
            <img src="assets/img/clients/paypal.png" alt="">
          </div>
          <div class="item wow zoomIn">
            <img src="assets/img/clients/mailchimp.png" alt="">
          </div>
        </div>
      </div> <!-- .container-fluid -->
    </div> <!-- .page-section -->
  </main>

  <footer class="page-footer">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-3 py-3">
          <h3>Inv<span class="text-primary">Evntory.</span></h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>

          <p><a href="#" >isahlabb22@mail.com</a></p>
          <p><a href="#">08162463010</a></p>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Quick Links</h5>
          <ul class="footer-menu">
            <li><a href="#">How it works</a></li>
            <li><a href="#">Security</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Resources</a></li>
            <li><a href="#">Report a Bug</a></li>
          </ul>
        </div>
        
        
      </div>

      <div class="row">
        <div class="col-sm-6 py-2">
          <p id="copyright">&copy; {{date('Y')}} <a href="#">08162463010</a>. All rights reserved</p>
        </div>
        <div class="col-sm-6 py-2 text-right">
          <div class="d-inline-block px-3">
            <a href="#">Privacy</a>
          </div>
          <div class="d-inline-block px-3">
            <a href="#">Contact Us</a>
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </footer> <!-- .page-footer -->


  <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>

  <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

  <script src="{{asset('assets/vendor/wow/wow.min.js')}}"></script>

  <script src="{{asset('assets/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

  <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>

  <script src="{{asset('assets/vendor/animateNumber/jquery.animateNumber.min.js')}}"></script>

  <script src="{{asset('assets/js/google-maps.js')}}"></script>

  <script src="{{asset('assets/js/theme.js')}}"></script>


</body>
</html>