<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="col-12">
            <form action="{{route('categories.store')}}" method="POST">
                <input type="hidden" name="_method" value="post" /> {{csrf_field()}}
                <h3>Create Categories</h3>
                <label for="">category</label>
                <input id="" name="category" class="form-control" type="text">
                <button type="submit" class="btn btn-warning btn-lg">create</button>
            </form>
        </div>
    </div>
</body>
</html>