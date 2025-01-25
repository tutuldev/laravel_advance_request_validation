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
            <h1>Add New User</h1>
            {{-- <pre>
            @php
                print_r($errors->all())
            @endphp
            </pre> --}}
               {{-- @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error )
                            <li>{{$error}}</li>

                    @endforeach
                    </ul>
               @endif --}}

            <form action="{{route('addUser')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <level class="form-level">Name</level>
                    <input type="text"  value="{{old('username')}}" class="form-control @error('username') is-invalid @enderror"  name="username">
                    <span class="text-danger">
                        @error('username')
                            {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <level class="form-level">Email</level>
                    <input type="email" value="{{old('useremail')}}" class="form-control @error('useremail') is-invalid @enderror" name="useremail">
                     <span class="text-danger">
                        @error('useremail')
                            {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <level class="form-level">Password</level>
                    <input type="password" value="{{old('userpass')}}" class="form-control @error('userpass') is-invalid @enderror" name="userpass">
                     <span class="text-danger">
                        @error('userpass')
                            {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <level class="form-level">Age</level>
                    <input type="number" value="{{old('userage')}}" class="form-control @error('userage') is-invalid @enderror" name="userage">
                     <span class="text-danger">
                        @error('userage')
                            {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <level class="form-level">City</level>
                    <input type="text" value="{{old('usercity')}}" class="form-control @error('usercity') is-invalid @enderror" name="usercity">
                     <span class="text-danger">
                        @error('usercity')
                            {{$message}}
                        @enderror
                    </span>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
