
<div class="container-fluid p-0">        
    <div class="tenTrang text-danger"><i>{{$slot}}</i></div>
</div>
<!--  -->
<div class="container-fluid p-0 sticky-top">          
    <div class="row tenTrangPhu">   
        <div class="col-5 text-danger"><i>{{$slot}}</i></div>
        <div class="col-7 text-center timKiem">
            <form action="/search" method="get" class="d-flex" role="search">
                <input type="text" placeholder="Địa điểm,món ăn,đồ uống..." class="form-control w-50 h-25">
                <button type="submit" class="btn"><i class="fa fa-search text-danger"></i></button>
            </form>
        </div>          
    </div> 
</div> 