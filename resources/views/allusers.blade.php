<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show user</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1>All User List</h1>
            <a href="/newuser" class="btn btn-success btn-sm mb-3">Add New</a>
            <table class="table table-bordered table-striped">

                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>City</th>
                    <th>Show</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
                @foreach ( $data as $id=>$user)
                <tr>
                    <td class="px-5">{{$user->id}}</td>
                    <td class="px-5">{{$user->name}}</td>
                    <td class="px-5">{{$user->email}}</td>
                    <td class="px-5">{{$user->age}}</td>
                    <td class="px-5">{{$user->city}}</td>
                    <td>  <a href="{{route('view.user',$user->id)}}" class="btn btn-primary btn-sm">View</a></td>
                    <td>  <a href="{{route('delete.user',$user->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
                    <td>  <a href="{{route('update.page',$user->id)}}" class="btn btn-warning btn-sm">Update</a></td>
                  </tr>
                @endforeach
            </table>
            
        </div>
    </div>
</div>
</body>
</html>



@foreach ( $data as $id=>$user)

@endforeach

