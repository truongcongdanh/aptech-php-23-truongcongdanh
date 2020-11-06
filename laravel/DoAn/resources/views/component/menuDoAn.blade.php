<!-- <div class="container img-body pt-4">
        <div class="row d-flex">
            @foreach($listImage as $key => $value)
            <div class="col-sm-4">
                
                <div class="border abc mb-4">
                
                <a href="tomtithaphanh.html"> <img class="img-layout" style="background-image:url('{{ asset('img') }}/{{ $value->image }}')"></a>
                <p class="p"><a href="ssj4.html" class="mau">{{ $value->name }}</a>
                    <br> Giá: {{ number_format($value->price) }}đ<br>
                   <p class="text-center">Thêm vào giỏ hàng</p>
                </p>
                </div>
            </div>
            @endforeach

        </div>
</div> -->

<!-- Show món ăn -->
<section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-1 order-lg-2">
                    <div class="product-list">
                        <div class="row">
                            @foreach($listImage as $key => $value)
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img style="background-image:url(img/{{$value->image}}); background-size:cover;" height="300px">
                                        <div class="sale pp-sale">Sale</div>
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a onclick="AddCart({{$value->id}})" href="javascript:">+ Add
                                                    Cart</a></li>
                                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name">Towel</div>
                                        <a href="#">
                                            <h5>{{$value->name}}</h5>
                                        </a>
                                        <div class="product-price">
                                            {{number_format($value->price)}}₫
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

   