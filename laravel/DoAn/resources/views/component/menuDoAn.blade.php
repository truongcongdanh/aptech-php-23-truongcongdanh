<div class="container img-body pt-4">
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
</div>

   