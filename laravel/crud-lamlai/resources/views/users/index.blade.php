<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <table class="table-bodered">
    <thead>
            <tr>
                <td>id</td>
                <td>name</td>
                <td>email</td>
                <td>password</td>
            </tr>

        </thead>
        <tbody>
        @foreach($nguoiDung as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
