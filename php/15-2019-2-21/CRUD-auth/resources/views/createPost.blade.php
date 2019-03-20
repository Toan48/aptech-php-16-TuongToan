
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
</head>
<body>
    @extends('layouts.app')
    <form action="{{route('post.store')}}" method="POST">
            <input type="hidden" name="_method" value="post" /> {{csrf_field()}}
            <div class="form-group">
                <label for="">title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                    <label for="">category</label>
                    <input type="text" name="category" class="form-control">
                </div>
            <textarea name="content"></textarea>
            <script>
                CKEDITOR.replace( 'content' );
            </script>
            <button type="submit" class="btn btn-primary">save</button>
    </form>
</body>
</html>