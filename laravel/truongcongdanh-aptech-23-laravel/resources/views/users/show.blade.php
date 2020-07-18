@extends('layout.master')
@section('content')
@component('layout.components.title')
show page
@endcomponent
<div class="container mt-3">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead class="">
          <tr class="text-center">
            <th scope="col" class="">ID</th>
            <th scope="col" class="">Name</th>
            <th scope="col" class="">Email</th>
            <th scope="col" class="">Password</th>
            <th scope="col" class="">Created Date</th>
            <th scope="col" class="">Updated Date</th>
            <th scope="col" class="">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr class="text-center">
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->title}}</td>
            <td>{{$user->slug}}</td>
            <td>{{$user->description}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
            <td class="d-flex border-0 align-items-center">
              <form action="{{route('users.edit',$user->id)}}" method="get">
              <button type="submit" class="jeg_search_button btn"><i class="fas fa-user-edit fa-lg"></i></button>
              </form>
              <form action="{{route('users.destroy',$user->id)}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" value="delete">
                <button type="submit" class="jeg_search_button btn"><i class="fas fa-trash-alt fa-lg"></i></button>
              </form>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection