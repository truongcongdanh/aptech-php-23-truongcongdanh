<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<div class="container-fluid mt-3">
  <div class="row">
    <div class="col-12">
      <table class="table table-hover table-bordered table-striped">
        <thead class="thead-dark">
          <tr class="text-center">
            <th scope="col" class="">Id</th>
            <th scope="col" class="">Name</th>
            <th scope="col" class="">Email</th>
            <th scope="col" class="">password</th>
            <th scope="col" class="">create.at</th>
            <th scope="col" class="">update.at</th>
          </tr>
        </thead>
        <tbody>
          @foreach($nguoiDung as $user)
          <tr class="text-center">
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->created_at}}</td>
            <td>{{$user->updated_at}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

