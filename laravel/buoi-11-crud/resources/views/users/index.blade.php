<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <table class="table table-bodered">
                <thead class="thead thead-dark">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <!-- tbody -->
                @foreach($users as $user)
                <tbody>
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->password}}</td>
                        <td class="d-flex align-items-center justify-content-around">
                            <!-- showw -->
                            <form action="users/{{$user->id}}" method="PATCH">
                                <button type="submit">Show</button>
                            </form>
                            <!-- edit -->
                            <form action="users/{{$user->id}}/edit" method="GET">
                                <button type="submit">Edit</button>
                            </form>
                            <!-- delete -->
                            <form action="users/{{$user->id}}" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type=" submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
                <form action="users/create" method="PATCH">
                    <div class="text-right mb-5">
                        <button type="submit" class="btn btn-secondary">Create a user</button>
                    </div>
                </form>
        </div>
    </div>
</div>

