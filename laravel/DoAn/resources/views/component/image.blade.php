


@extends('layout.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-2">
            @component('layout.titleTrang.title')
                THÊM MÓN
            @endcomponent
        </div>
        <div class="col-10">
        <div class="container">
    <br><br><br>
    @if ($message = Session::get('success'))
     
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert"></button>
        <strong>{{ $message }}</strong>
    </div>
    <br>
    @endif
    <h2>Thêm Món </h2>
    <br>
    <!-- Upload  -->
    <form id="file-upload-form" class="uploader" action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        @csrf
        <label for="">Name</label>
        <input type="text" name="name" /> <br>
        <label for="">Price</label>
        <input type="text"  name="price" /> <br>
        <input id="file-upload" type="file" name="fileUpload" accept="image/*" onchange="readURL(this);">
        <br><br>
        <button type="submit" class="btn btn-success">Thêm</button>
       
    </form>
</div>
        </div>
    </div>
</div>


@endsection

