@extends('layout.master')
@section('content')
@component('layout.components.title')
edit page
@endcomponent
<div class="container mt-3">
  <div class="row">
    <div class="col-12 ">
      <form action="{{route('users.update',$user->id)}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="_method" value="put" />
        <div class="form-group ">
          <label class="font-weight-bold" for="name">NAME</label>
          <input type="text" class="form-control rounded-0" id="name" placeholder="Name" name="name"
            value="{{$user->name}}">
        </div>
        <div class="form-group ">
          <label class="font-weight-bold" for="email">EMAIL</label>
          <input type="email" class="form-control rounded-0" id="email" placeholder="Email" name="email"
            value="{{$user->email}}">
        </div>
        <div class="form-group ">
          <button type="submit" class="btn btn-warning">
            Edit
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection