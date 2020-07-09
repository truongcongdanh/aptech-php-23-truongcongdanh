<h1>Edit User ID {{$user->id}}</h1>
<form action="/users/{{$user->id}}" method="POST">
    <input type="hidden" name="_method" value="PATCH">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" value="{{$user->name}}" id="name">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" value="{{$user->email}}" id="email">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" value="{{$user->password}}" id="password">
    </div>
    <button type="submit">Edit</button>
</form>