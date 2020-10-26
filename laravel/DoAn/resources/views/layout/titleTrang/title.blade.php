
    <div class="container-fluid sticky-top">
        <div class="row">
       
            <div class="col-12 menuKhamPha">               
            <h5 class="d-none d-md-block text-danger"><i class="fas fa-home pt-4"></i>{{$slot}}</h5>
                <hr>                       
                <ul class="list-unstyled menu1 pl-xl-5 pb-3">
                    <li><a href="{{ route('trangChinh') }}">Trang Chủ</a></li>
                        <hr>
                    <li><a href="{{ route('trangMonAn') }}">Món Ăn</a></li>
                        <hr>
                    <li><a href="{{ route('trangThucUong') }}">Đồ Uống</a></li>
                        <hr>
                    <li><a href="{{ route('trangCompo') }}">Compo</a></li>
                        <hr>                   
                    <li><a href="{{ route('trangGiamGia') }}">Giảm Giá</a></li>
                        <hr>
                    <li><a href="{{ route('trangLienHe') }}">Liên Hệ</a></li>
                        <hr>
                    <li><a href="{{ route('trangThemMon') }}">Thêm Món</a></li>
                        <hr>
                </ul>
             
            </div>
           
        </div>
    </div>
