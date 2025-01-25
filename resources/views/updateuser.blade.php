<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-4">
            <h1>Update User Data</h1>
            <form action="{{route('update.user',$data->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <level class="form-level">Name</level>
                    <input type="text" value="{{$data->name}}" class="form-control" name="username">
                </div>
                <div class="mb-3">
                    <level class="form-level">Email</level>
                    <input type="text" value="{{$data->email}}" class="form-control" name="useremail">
                </div>
                <div class="mb-3">
                    <level class="form-level">Age</level>
                    <input type="text" value="{{$data->age}}" class="form-control" name="userage">
                </div>
                <div class="mb-3">
                    <level class="form-level">City</level>
                    <input type="text" value="{{$data->city}}" class="form-control" name="usercity">
                </div>
                <button type="submit" class="btn btn-primary">update</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
