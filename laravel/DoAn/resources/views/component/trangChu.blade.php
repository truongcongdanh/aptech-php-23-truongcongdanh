@extends('layout.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-2">
            @component('layout.titleTrang.title')
            TRANG CHỦ
            @endcomponent
        </div>
        <div class="col-10">
        @include('component.menuDoAn')
        </div>
    </div>
</div>



@endsection


