<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<a href="/users"><button type="button" class="btn btn-primary">HOME</button></a> <br>
<br>
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
                        <th scope="col">Created_at</th>
                        <th scope="col">Updated_at</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <!-- tbody -->
                <tbody>
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->password}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                        <td class="d-flex align-items-center justify-content-around">
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
            </table>
        </div>
    </div>
</div>
