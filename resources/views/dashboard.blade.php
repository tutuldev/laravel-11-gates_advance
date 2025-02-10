<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashbord</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="mb-3">Welcome, {{ optional(Auth::user())->name ?? 'Guest' }}</h2>

        <a href="" class="btn btn-success">Admin Panel</a>
        <a href="/profile" class="btn btn-primary">Profile</a>
        <a href="/post" class="btn btn-info">Post</a><br>
        <a href="{{route('logout')}}" class="btn btn-danger mt-3">Logout</a>
    </div>
</body>
</html>
