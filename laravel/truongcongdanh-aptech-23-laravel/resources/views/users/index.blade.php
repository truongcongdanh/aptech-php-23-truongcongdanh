<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('css/styles.css')}}">
<div class="container mt-3">
  <div class="row">
    <div class="col-12">
      <table class="table table-hover table-bordered">
        <thead class="thead-dark">
          <tr class="text-center">
            <th scope="col" class="">ID</th>
            <th scope="col" class="">NAME</th>
            <th scope="col" class="">EMAIL</th>
            <th scope="col" class="">DESCRIPTION</th>
            <th scope="col" class="">CONTENT</th>
            <th scope="col" class="">ACTION</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr class="text-center text-light">
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->title}}</td>
            <td>{{$user->slug}}</td>
            <td>{{$user->description}}</td>
            <td>{{$user->content}}</td>
            <td class="d-flex align-items-center justify-content-around">
              <form action="{{route('users.show',$user->id)}}" method="get">
              <button type="submit" class="jeg_search_button btn"><i class="fas fa-eye fa-lg"></i></button>
              </form>
              <form action="{{route('users.edit',$user->id)}}" method="get">
                <button type="submit" class="jeg_search_button btn"><i class="fas fa-user-edit fa-lg"></i></button>
              </form>
              <form action="{{route('users.create')}}" method="get">
          <button type="submit" class="btn btn-info">
            create a new user
          </button>
        </form>
              
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="d-flex justify-content-center">{{$users->links()}}</div>
    </div>
  </div>
</div>
