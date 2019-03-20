<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>
    <link rel="stylesheet" href="{{asset('css/createcar.css')}}">
</head>
<body>
    <div class="container">
        <div class="col-12">
            <h1 class="text-warning text-center">Create car</h1>
        </div>
    </div>
    
    <div class="container border-container py-2 my-3">
        <form action="{{route('car.store')}}" method="POST">
            <input type="hidden" name="_method" value="post" /> {{csrf_field()}}
            <div class="col-12 d-flex">
                <div class="col-6 form-group">
                    <label for="">name
                    </label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="col-6 form-group">
                    <label for="">year</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-12 d-flex">
                <div class="col-6 form-group">
                    <label for="">body style</label>
                    <input type="text" name="bodystyle" class="form-control">
                </div>
                <div class="col-6 form-group">
                    <label for="">engine</label>
                    <input type="text" class="form-control" name="engine">
                </div>
            </div>
            <div class="col-12 d-flex">
                <div class="col-6 form-group">
                    <label for="">transmission</label>
                    <input type="text" name="transmission" class="form-control">
                </div>
                <div class="col-6 form-group">
                    <label for="">fuel</label>
                    <input type="text" class="form-control" name="fuel_style">
                </div>
            </div>
            <div class="col-12 d-flex">
                <div class="form-group col-6">
                    <label for="">color</label>
                    <input type="text" class="form-control">
                </div>
                <div class="col-6 form-group">
                    <label for="price">price</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-12 form-group">
                <div>
                    <label for="">category</label>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                    </div>
                <select class="custom-select" id="inputGroupSelect01" name="category">
                    <option selected disabled>Choose...</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name_category}}</option>
                    @endforeach()
                </select>
            </div>
        </div>
        <div class="col-12 form-group">
            <label for="">image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="col-12">
            <label for="">descript</label>
            <textarea id="summernote" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-warning"> create</button>
    </form>
    </div>
    
    <script>
        $('#summernote').summernote({
            placeholder: 'add description here',
            tabsize: 2,
            height: 100
        });
    </script>
</body>
</html>