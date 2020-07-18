<!DOCTYPE html>
<html>
 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User CRUD Laravel</title>
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/styles.css')}}">
  
</head>
 
<body>
  @include('layout.header')
  <hr>
  @section('content') @show
  <hr>
  @if(Route::currentRouteName() == 'users.index' || Route::currentRouteName() == 'users.show')
  @include('layout.footer')
  @endif
</body>
 
</html>