<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
</head>
<body>
    <div class="container-fluid p-0 menuMyHanh">
        <div class="row cover">
            <div class="col-5 col-md-4 d-flex">
                <div class="img-logo d-none d-xl-block"></div>
                <a><img src="https://images.cooltext.com/5449312.gif" width="180" height="80" alt="Mỹ Hạnh" /></a>
            </div>
            <div class="col-7 col-md-5 pt-4">
                <form action="/search" method="get" class="d-flex" role="search">
                    <input type="text" placeholder="Địa điểm,món ăn,đồ uống..." class="form-control w-75 h-50">
                    <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="col-3 pt-4 d-none d-md-block">
                <p class="text-danger text-left">Đăng kí || Đăng nhập &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <i class="fab fa-facebook fa-2x" style="color: #097deb;"></i>
                 <i class="fab fa-instagram fa-2x" style="color:brown;"></i> <i class="fab fa-youtube fa-2x"></i></p>
            </div>
        </div>
    </div>
    <!--  -->
    <div class="container-fluid pt-4">
     <div class="row">
        <div class="col-12">
            <div class="owl-carousel owl-theme welcome diaDiemKhac" style="position: relative;">
                        <div class="item"><img src="{{asset('img/tomHap.jpg')}}">
                            <div class="textOwl text-center">Cùng thưởng thức món tôm hấp thơm ngon</div>
                        </div>
                        <div class="item"><img src="{{asset('img/soLongMoHanh.jpg')}}">
                            <div class="textOwl text-center">Cảm giác thật tuyệt với sò lông mỡ hành</div>
                        </div>
                        <div class="item"><img src="{{asset('img/suonHeoRim.jpg')}}">
                            <div class="textOwl text-center">Nhìn thôi đã thấy thèm rồi phải không nào</div>
                        </div>
                        <div class="item"><img src="{{asset('img/chaoCaBop.jpg')}}">
                            <div class="textOwl text-center">Cá bớp mà nấu cháo thì quá ngon lun</div>
                        </div>
                        <div class="item"><img src="{{asset('img/miXaoHaiSan.jpg')}}">
                            <div class="textOwl text-center">Có bạn nào ưa thích mì xào không nào</div>
                        </div>
            </div>
        </div>
     </div>
    </div>
        
</body>

</html>