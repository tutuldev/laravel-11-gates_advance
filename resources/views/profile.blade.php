<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-5 mt-5">
            <h2>This is profile Page</h2>
            <div class="card">
                <div class="card-header">
                    <h3>Profile</h3>
                </div>
                <div class="card-body">
                   <h5>Id: {{$user->id}}</h5>
                   <hr>
                   <h5>Name:  {{$user->name}}</h5>
                   <hr>
                   <h5>Email:  {{$user->email}}</h5>
                   <hr>
                   <h5>Age:  {{$user->age}}</h5>
                   <hr>
                   <h5>Roll:  {{$user->role}}</h5>
                   <hr>
                   <a href="/" class="btn btn-secondary">Back</a>
                   <a href="/dashboard" class="btn btn-success">Dashboard</a>
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
