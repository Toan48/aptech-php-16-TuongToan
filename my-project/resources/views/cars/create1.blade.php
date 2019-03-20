<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>
</head>
<body>
    <div class="container">
        <form action="{{route('cars.store')}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="post" /> {{csrf_field()}}
            <div class="col-12 d-flex">
                <div class="col-6 form-group">
                    <label for="name">name</label>
                    <input type="text" name="name" class="form-control">
                    <p class="text-danger">{{$errors->first('name')}}</p>
                </div>
                <div class="col-6 form-group">
                    <label for="name">year</label>
                    <input type="text" name="year" class="form-control">
                    <p class="text-danger">{{$errors->first('year')}}</p>
                </div>
            </div>
            <div class="col-12 d-flex">
                <div class="col-6 form-group">
                    <label for="name">body style</label>
                    <input type="text" name="body_style" class="form-control">
                    <p class="text-danger">{{$errors->first('body_style')}}</p>
                </div>
                <div class="col-6 form-group">
                    <label for="name">engine</label>
                    <input type="text" name="engine" class="form-control">
                    <p class="text-danger">{{$errors->first('engine')}}</p>
                </div>
            </div>
            <div class="col-12 d-flex">
                <div class="col-6 form-group">
                    <label for="name">price</label>
                    <input type="text" name="price" class="form-control">
                    <p class="text-danger">{{$errors->first('price')}}</p>
                </div>
                <div class="col-6 form-group">
                    <label for="name">transmission</label>
                    <input type="text" name="transmission" class="form-control">
                    <p class="text-danger">{{$errors->first('transmission')}}</p>
                </div>
            </div>
            <div class="col-12 d-flex">
                <div class="col-6 form-group">
                    <label for="name">color</label>
                    <input type="text" name="color" class="form-control">
                    <p class="text-danger">{{$errors->first('color')}}</p>
                </div>
                <div class="col-6 form-group">
                    <label for="name">categories</label>
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
                        <p class="text-danger">{{$errors->first('categories')}}</p>
                    </div>
                </div>
            </div>
            <div class="col-12 form-group">
                <label for="">fuel style</label>
                <input type="text" class="form-control" name="fuel_style">
                <p class="text-danger">{{$errors->first('fuel_style')}}</p>
            </div>
            <div class="col-12 form-group">
                <label for="">image</label>
                <input type="file" name="img" class="form-control">
                <p class="text-danger">{{$errors->first('image')}}</p>
            </div>
            <div class="col-12 form-group">
                <label for="">description</label>
                <textarea id="summernote" name="description"></textarea>
                <p class="text-danger">{{$errors->first('description')}}</p>
            </div>
            <button type="submit" class="btn btn-warning">create</button>
        </form>
    </div>

    <script>
        $('#summernote').summernote({
          placeholder: 'Hello bootstrap 4',
          tabsize: 2,
          height: 100
        });
      </script>
</body>
</html>