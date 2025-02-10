<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-5 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3>Register</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('registerSave')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-lebel">Name</label>
                            <input type="text" name="name" id="username" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="useremail" class="form-lebel">Email</label>
                            <input type="email" name="email" id="useremail" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="userage" class="form-lebel">Age</label>
                            <input type="number" name="age" id="userage" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="userpassword" class="form-lebel">Password</label>
                            <input type="password" name="password" id="userpassword" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="userpassword-confirm" class="form-lebel">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="userpassword-confirm" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="userrole" class="form-label">Role</label>
                            <select name="role" id="userrole" class="form-select">
                                <option value="admin">Admin</option>
                                <option value="reader">Reader</option>
                                <option value="administrator">Administrator</option>
                                <option value="author">Author</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Register</button>
                        <a href="/" class="btn btn-secondary">Back</a>
                    </form>
                </div>
                @if ($errors->any())
                <div class="card-footer text-body-secondary">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($error->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                @endif
            </div>
        </div>
    </div>
</div>
</body>
</html>
