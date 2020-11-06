@extends('layout.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-2">
            @component('layout.titleTrang.title')
            COMPO
            @endcomponent
        </div>
        <div class="col-10">
        @include('component.ShowMonAn')
        </div>
    </div>
</div>

@endsection


