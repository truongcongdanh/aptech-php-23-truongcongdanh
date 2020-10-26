<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Do-an/laravel</title>
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/styles.css')}}">
  <link rel="stylesheet" href="{{asset('OwlCarousel2-2.3.4/dist/assets/owl.carousel.css')}}"> 
  <link rel="stylesheet" href="{{asset('css/food.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head> 
<body>
  @include('layout.header')
  <hr width="80%">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        
        @section('content') @show
      </div>
    </div>
  </div>
 <hr width="80%">
  
  @include('layout.footer')

  <script rel="stylesheet" src="{{asset('js/jquery-3.4.1.js')}}"></script>
  <script rel="stylesheet" src="{{asset('OwlCarousel2-2.3.4/dist/owl.carousel.js')}}"></script>
  <script rel="stylesheet" src="{{asset('js/owlCarousel.js')}}"></script>
  <script rel="stylesheet" src="{{asset('js/DoAn.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</body> 
</html>