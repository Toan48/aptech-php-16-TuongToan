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
    <div class="container">
        <form action="{{route('car.store')}}" method="POST">
            <input type="hidden" name="_method" value="post" /> {{csrf_field()}}
            <label for="">name</label>
            <input type="text" name="name" class="form-control">
            <label for="">year</label>
            <input type="text" name="year" class="form-control">
            <label for="">price</label>
            <input type="text" name="price" class="form-control">
            <button type="submit" class="btn btn-warning">adsfasd</button>
        </form>
    </div>
</body>
</html>