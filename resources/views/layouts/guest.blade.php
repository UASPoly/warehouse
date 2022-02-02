<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="copyright" content="SISTRAC ID, https://sistrac.com">

  <title>WireHouse</title>

  <link rel="stylesheet" href="{{asset('assets/vendor/animate/animate.css')}}">

  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">

  <link rel="stylesheet" href="{{asset('assets/css/maicons.css')}}">

  <link rel="stylesheet" href="{{asset('assets/vendor/owl-carousel/css/owl.carousel.css')}}">

  <link rel="stylesheet" href="{{asset('assets/css/theme.css')}}">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
            <br>
            <br>
            <br>
            <br>
                <div class="card shadow">
                    <div class="card-body">
                        {{$slot}}
                    </div>
                </div>
            </div>
        </div>
    </div>
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