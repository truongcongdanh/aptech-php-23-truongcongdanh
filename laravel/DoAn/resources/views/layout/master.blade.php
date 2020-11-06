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
  <!-- Show món ăn -->
<link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/themify-icons.css">
<link rel="stylesheet" href="assets/css/elegant-icons.css">
<link rel="stylesheet" href="assets/css/style.css">
</head> 
<body>
  @include('layout.header')
  <br>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        
        @section('content') @show
      </div>
    </div>
  </div>
 
  @include('layout.carousel')
 <hr width="80%">
  
  @include('layout.footer')

  <script rel="stylesheet" src="{{asset('js/jquery-3.4.1.js')}}"></script>
  <script rel="stylesheet" src="{{asset('OwlCarousel2-2.3.4/dist/owl.carousel.js')}}"></script>
  <script rel="stylesheet" src="{{asset('js/owlCarousel.js')}}"></script>
  <script rel="stylesheet" src="{{asset('js/DoAn.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <!-- Show món ăn -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.zoom.min.js"></script>
    <script src="assets/js/jquery.dd.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- JavaScript alert -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <!-- javascript -->
    <script>
        function AddCart(id){
                $.ajax({                   
                    url: "AddCart/"+id,
                    type: "GET",                   
                }).done(function(response){                  
                    $("#change-item-cart").empty();
                    $("#change-item-cart").html(response);
                    alertify.success('Đã thêm vào giỏ hàng');
                });
        }

        $("#change-item-cart").on("click", ".si-close i", function(){
            $.ajax({                   
                    url: "deleteItemCart/"+$(this).data("id"), //url web.php
                    type: "GET",                   
                }).done(function(response){                  
                    $("#change-item-cart").empty();
                    $("#change-item-cart").html(response);
                    alertify.success('Đã xoá sản phẩm');
                });
        });
    </script>

</body> 
</html>