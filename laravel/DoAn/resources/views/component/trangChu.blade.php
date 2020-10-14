@extends('layout.master')
@section('content')
<!-- title trang -->
@component('layout.titleTrang.title')
TRANG CHỦ
@endcomponent

<!-- Nội dung trang -->
@include('component.menuDoAn')


@endsection


