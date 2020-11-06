@extends('layout.master')
@section('content')
<!-- title trang -->
<div class="container-fluid">
    <div class="row">
        <div class="col-2">
            @component('layout.titleTrang.title')
            MÓN ĂN
            @endcomponent
        </div>
        <div class="col-10">
        @include('component.ShowMonAn')
        </div>
    </div>
</div>

<!-- Nội dung trang -->

@endsection

