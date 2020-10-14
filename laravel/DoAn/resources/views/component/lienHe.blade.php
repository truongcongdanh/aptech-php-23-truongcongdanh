@extends('layout.master')
@section('content')
<!-- title trang -->
@component('layout.titleTrang.title')
LIÊN HỆ
@endcomponent

    <!-- Nội dung trang -->
    <div class="container-fluid mt-3">
<div class="row">
    <div class="col-6">
  
    <ul> <p>Mọi chi tiết xin liên hệ:</p></ul>
    <ul> <b>NHÀ HÀNG HẢI SẢN MỸ HẠNH ®</b></ul>
    <ul> <p>Địa chỉ: Nhà Hàng Mỹ Hạnh, 18 Võ Nguyên Giáp, Mân Thái, Sơn Trà, Đà Nẵng.</p></ul>
    <ul> <p>Điện thoại: <i class="text-success">(028) 3 9918 964</i></p></ul>
    <ul> <p>Tư vấn & nhận tiệc : "<i class="text-success"> 0906.79.79.32</i></p></ul>
    <ul>Email: <a class="text-body" href="lienhe@nhahangmyhanh.com">lienhe@nhahangmyhanh.com</a></ul>
    <ul>Website: <a class="text-body" href="https://www.nhahangmyhanh.com">https://www.nhahangmyhanh.com</a></ul>
    <ul>Facebook: <a class="text-body" href="http://www.facebook.com/myhanh">http://www.facebook.com/myhanh</a></ul>

   

    </div>
    <div class="col-6">
    <div class="contact-box">
        <div class="contact-box-top pt-1 ">
            <h4 class="text-light text-center pt-3 pb-3">Liên Hệ</h4>
        </div>
        <div class="p-3">
            <form>
                <div class="form-group">
                  <!-- <label for="name">Họ tên</label> -->
                  <input type="name" class="form-control" id="exampleInputName"  placeholder="Họ tên:">
                </div>
                <div class="form-group">
                    <!-- <label for="phone">Điện thoại</label> -->
                    <input type="phone" class="form-control" id="exampleInputPhonePhone" placeholder="Số điện thoại:">
                </div>
                <div class="form-group">
                    <!-- <label for="email">Email</label> -->
                    <input type="email" class="form-control" id="exampleInputName"  placeholder="Email:">
                </div>
                <div class="form-group">
                    
                 <!-- <label for="subject">Nội dung liên hệ</label><br> -->
                 <textarea class="contact-subject" id="subject" name="subject" placeholder="Nội dung liên hệ"></textarea>
                </div>
                <div class="text-right mb-2"><button type="submit" class="btn btn-danger">Gửi</button></div>
            
              </form>
              <div class="text-center text-danger"><h4>Hotline: 0906797932</h4></div>
        </div>
    </div>
    </div>
</div>
    </div> 
    <br>


    <div class="container-fluid">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2312.8748715386364!2d108.24509368444166!3d16.065002043001773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc40acf932b30608c!2zSOG6o2kgU-G6o24gxJDDoCBO4bq1bmcgTeG7uSBI4bqhbmg!5e0!3m2!1svi!2s!4v1602307290157!5m2!1svi!2s" 
        width="100%" height="450" frameborder="0" style="border:2px red;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
@endsection

