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
        <form action="">
            <div class="form-group">
                <label for="">name</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">year</label>
                <input type="text" name="year" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">price</label>
                <input type="text" name="price" class="form-control">
            </div>
            <div class="form-group">
                <label for="" name="">body style</label>
                <input type="text" name="body_style" class="form-control">
            </div>
            <div class="form-group">
                <label for="">engine</label>
                <input type="text" class="form-control" name="engine">
            </div>
            <div class="form-group">
                <label for="">transmission</label>
                <input type="text" name="transmission" class="form-control">
            </div>
            <div class="form-group">
                <label for="">color</label>
                <input type="text" name="color" class="form-control">
            </div>
            <div class="form-group">
                <label for="">fuel style</label>
                <input class="form-control" name="fuel_syle">
            </div>
            <div class="form-group">
                <label for="">categories</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="categories">
                        <option selected disabled>Choose...</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="">image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-warning">create</button>
            </div>
        </form>
    </div>
</body>
</html>