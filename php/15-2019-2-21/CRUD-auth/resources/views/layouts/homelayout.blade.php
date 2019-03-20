<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container d-flex my-4">
        <div class="col-6">
            <button class="btn btn-primary">Home</button>          
        </div>
        <div class="col-6"><h4>CRUD</h4></div>
    </div>
    @yield('content')
    <div class="container">
        <div class="col-12 d-flex justify-content-end">
            <form action="{{route('post.create')}}" method="GET">
            <button class="btn btn-primary" type="submit">Create User</button>
            </form>
        </div>
    </div>
</body>
</html>