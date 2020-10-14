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
</head> 
<body>
  @include('layout.header')
  <hr width="80%">
  <div class="container-fluid">
    <div class="row">
      <div class="col-2">
        @include('component.menu')
      </div>
      <div class="col-10">
        
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

</body> 
</html>